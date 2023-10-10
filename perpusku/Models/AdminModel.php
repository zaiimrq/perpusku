<?php 

namespace Perpus\Perpusku\Models;


use Perpus\Perpusku\Core\Database;


class AdminModel
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

    public function count()
    {
        $this->db->start();

        $this->db->query("SELECT SUM(jumlah_copy) AS all_buku FROM buku");
        $jumlah_buku =  $this->db->get();

        $this->db->query("SELECT COUNT(id) AS jumlah_peminjaman FROM peminjaman");
        $jumlah_peminjaman = $this->db->get();

        $this->db->query("SELECT * FROM buku");
        $buku = $this->db->getAll();

        $this->db->end();



        return [
            'jumlah_buku' => $jumlah_buku,
            'jumlah_peminjaman' => $jumlah_peminjaman,
            'buku' => $buku
        ];
    }
}