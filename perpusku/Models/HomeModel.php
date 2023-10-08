<?php 

namespace Perpus\Perpusku\Models;

use PDOException;
use Perpus\Perpusku\Core\Database;

class HomeModel extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function home()
    {
        $this->db->query("SELECT * FROM buku");
        return $this->db->getAll();
    }

    public function register($data)
    {

        $this->db->query('SELECT email FROM anggota WHERE email=:email');
        $this->db->bind('email', $data['email']);

        if(!($this->db->getRow()) > 0)
        {
            $this->db->start();
    
            $this->db->query( 'INSERT INTO anggota SET nama=:nama, email=:email');
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('email', $data['email']);
            $this->db->execute();
            
            $this->db->query('INSERT INTO users SET  email=:email, password=:password');
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);
            $this->db->execute();
    
            $this->db->end();
    
            return true;
        } else {
            return false;
        }

    }
}