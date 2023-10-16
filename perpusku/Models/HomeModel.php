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

    public function __destruct()
    {
        $this->db = null;
    }
    public function home($search)
    {
        $order = 'ORDER BY id DESC';
        $query = 'SELECT * FROM buku WHERE ( judul LIKE :search OR pengarang LIKE :search OR penerbit LIKE :search OR tahun_terbit LIKE :search OR category LIKE :search )';
        $query .= $order;
        if ($search['c']) {
            $query .= ' AND category = "'. $search['c'] .'"';
            $query .= $order;
        }
        $search = '%' . $search['q'] . '%';
        $this->db->query($query);
        $this->db->bind('search', $search);
    
        return $this->db->getAll();
    }

    public function register($data)
    {

        $password = password_hash($data['password'], PASSWORD_DEFAULT);

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
            $this->db->bind('password', $password);
            $this->db->execute();
    
            $this->db->end();
    
            return true;
        } else {
            return false;
        }

    }


    public function login($data)
    {
        $query = 'SELECT users.email, users.password, users.is_admin, anggota.nama, anggota.id FROM users LEFT JOIN anggota ON users.email = anggota.email WHERE users.email = :email';

        $this->db->query($query);
        $this->db->bind('email', $data['email']);

        if ($this->db->getRow() > 0) {
            $rows = $this->db->get();

            if (password_verify($data['password'], $rows['password'])) {
                return [
                    'auth' => true,
                    'data' => $rows
                ];
            }
        } else {
            return false;
        }
    }


    public function getBook($id)
    {
        $this->db->query('SELECT * FROM buku WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->get();
    }
}