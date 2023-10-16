<?php 

namespace Perpus\Perpusku\Models;
use Perpus\Perpusku\Core\Database;

class AnggotaModel
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

    public function profile()
    {
        $this->db->query("SELECT * FROM anggota WHERE email=:email");
        $this->db->bind('email', $_SESSION['auth']['user']['email']);
        return $this->db->get();
    }

    public function profile_update($data, $image)
    {

        $image = $image['image'];
        $oldImage = $data['oldImage'] ?? null;

        if ($image['error'] == 0) {     
            $image_name = uniqid() . '.webp';
            $tmp_name = $image['tmp_name'];
        }

        $query = "UPDATE anggota SET nama=:nama, nomor_telepon=:nomor_telepon, alamat=:alamat, image=:image WHERE email=:email";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('nomor_telepon', $data['nomor_telepon']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('image', $image_name ?? $oldImage);

        if ($this->db->getRow() > 0) {

            if (isset($image) && $image['error'] == 0) {
                if (isset($oldImage)) {
                    $path = __DIR__ . '/../../public/assets/img/profile/' . $oldImage;
                    unlink($path);
                }
                move_uploaded_file($tmp_name, __DIR__ . '/../../public/assets/img/profile/' . $image_name);
            }

            return true;
        }

    }

    public function borrow($data)
    {

        $query = "INSERT INTO peminjaman SET id_anggota=:id_anggota, id_buku=:id_buku, tanggal_peminjaman=:tanggal_peminjaman, qty=:qty, status=:status";
        $this->db->query($query);

        $this->db->bind('id_anggota', $_SESSION['auth']['user']['id']);
        $this->db->bind('id_buku', $data['id']);
        $this->db->bind('qty', $data['jumlah']);
        $this->db->bind('status', 'pending');
        $this->db->bind('tanggal_peminjaman', date('Y-m-d'));
        return $this->db->getRow();
    }

    public function get_sum_borrow()
    {


        $this->db->start();

        $this->db->query("SELECT SUM(qty) AS total FROM peminjaman WHERE id_anggota=:id_anggota");
        $this->db->bind('id_anggota', $_SESSION['auth']['user']['id']);
        $total = $this->db->get();

        $this->db->query("SELECT SUM(qty) AS pending FROM peminjaman WHERE id_anggota=:id_anggota AND status=:status");
        $this->db->bind('id_anggota', $_SESSION['auth']['user']['id']);
        $this->db->bind('status', 'pending');
        $pending = $this->db->get();
        
        $this->db->query("SELECT SUM(qty) AS approved FROM peminjaman WHERE id_anggota=:id_anggota AND status=:status");
        $this->db->bind('id_anggota', $_SESSION['auth']['user']['id']);
        $this->db->bind('status', 'approved');
        $approved = $this->db->get();

        $this->db->end();
        return [
          'total'  => $total['total'] ?? 0,
          'pending' => $pending['pending'] ?? 0,
          'approved' => $approved['approved'] ?? 0
        ];

    }

    public function get_borrow()
    {
        $this->db->query("SELECT buku.judul, peminjaman.qty, peminjaman.status FROM peminjaman LEFT JOIN buku ON peminjaman.id_buku = buku.id WHERE id_anggota=:id_anggota");
        $this->db->bind('id_anggota', $_SESSION['auth']['user']['id']);
        return $this->db->getAll();
    }
}