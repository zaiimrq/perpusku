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

        $this->db->query("SELECT * FROM buku ORDER BY id DESC");
        $buku = $this->db->getAll();

        $this->db->end();



        return [
            'jumlah_buku' => $jumlah_buku,
            'jumlah_peminjaman' => $jumlah_peminjaman,
            'buku' => $buku
        ];
    }

    public function store($data)
    {
        $query = "INSERT INTO buku SET judul=:judul, pengarang=:pengarang, penerbit=:penerbit, tahun_terbit=:tahun_terbit, jumlah_copy=:jumlah_copy, category=:category";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('jumlah_copy', $data['jumlah_copy']);
        $this->db->bind('category', $data['category']);

        return $this->db->getRow();
    }

    public function destroy($id)
    {
        $this->db->query('DELETE FROM buku WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->getRow();
    }

    public function edit($id)
    {
        $this->db->query('SELECT * FROM buku WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->get();
    }

    public function update($data)
    {
        $query = "UPDATE buku SET judul=:judul, pengarang=:pengarang, penerbit=:penerbit, tahun_terbit=:tahun_terbit, jumlah_copy=:jumlah_copy, category=:category WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('jumlah_copy', $data['jumlah_copy']);
        $this->db->bind('category', $data['category']);

        return $this->db->getRow();
    }
}