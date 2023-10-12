
<?php

use Perpus\Perpusku\Core\Flasher;

 require_once __DIR__ . "/../Layouts/Head.php" ?>

    <div class="container-fluid mt-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Buku</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlah_buku']['all_buku'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Buku Dipinjam</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['jumlah_peminjaman']['jumlah_peminjaman'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Payment</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div class="table-responsive my-3">
        <?php Flasher::flash('dashboard/admin') ?>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a class="h3 mb-0 btn btn-primary" href="<?= BASEURL ?>/dashboard/admin/create" ><i class="fa-solid fa-plus"></i> New Book</a>
        </div>
            <table class="table table-hover" id="BukuTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" data-priority="1" >Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($data['buku'] as $data): ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= htmlspecialchars($data['judul']) ?></td>
                            <td><?= htmlspecialchars($data['pengarang']) ?></td>
                            <td><?= htmlspecialchars($data['penerbit']) ?></td>
                            <td><?= htmlspecialchars($data['category']) ?></td>
                            <td><?= htmlspecialchars($data['tahun_terbit']) ?></td>
                            <td><?= htmlspecialchars($data['jumlah_copy']) ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?= BASEURL ?>/dashboard/admin/edit?id=<?= $data['id'] ?>" class="btn btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="<?= BASEURL ?>/dashboard/admin/delete" method="POST" id="FormDelete" >
                                        <input type="hidden" value="<?= $data['id'] ?>" name="id" >
                                    </form>
                                    <button type="submit" form="FormDelete" class="btn btn-danger ml-1">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div> 
<?php require_once __DIR__ . "/../Layouts/Foot.php"; ?>
<script>let table = new DataTable('#BukuTable');</script>