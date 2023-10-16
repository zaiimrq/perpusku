<?php 

namespace Perpus\Perpusku\Models;
use Perpus\Perpusku\Core\Database;

class BorrowAdminModel
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

    public function index()
    {
        $this->db->query("SELECT anggota.nama, buku.judul, peminjaman.qty, peminjaman.status, peminjaman.id FROM peminjaman LEFT JOIN anggota ON peminjaman.id_anggota = anggota.id LEFT JOIN buku ON peminjaman.id_buku = buku.id");
        return $this->db->getAll();
    }

    public function confirm($data)
    {
        if ($data['type'] == 'approve') {            
            $this->db->query("UPDATE peminjaman SET status=:status WHERE id=:id");
            $this->db->bind('status', 'approved');
            $this->db->bind('id', $data['id']);
            $this->db->execute();
            return [
                'approve' => true
            ];
        } 

        if ($data['type'] == 'decline') {            
            $this->db->query("UPDATE peminjaman SET status=:status WHERE id=:id");
            $this->db->bind('status', 'decline');
            $this->db->bind('id', $data['id']);
            $this->db->execute();
            return [
                'decline' => true
            ];
        }

    }
}