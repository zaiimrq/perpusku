<?php

use Perpus\Perpusku\Core\Flasher;

 require_once __DIR__ . "/../Layouts/Head.php" ?>
    <div class="container px-5 min-vh-100">
        <div class="d-sm-flex align-items-center justify-content-between my-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        </div>
        <?php Flasher::flash('anggota/profile') ?>
        <form action="<?= BASEURL ?>/dashboard/anggota/profile/edit" method="POST" enctype="multipart/form-data" class="row" >
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <div class="input-form my-3 border rounded-circle border position-relative">
                    <img class="img-profile rounded-circle object-fit-cover border shadow" id="Foto" src="<?= is_null($data['user']['image']) ? BASEURL . '/assets/img/pp.jpg' : BASEURL . '/assets/img/profile/' . $data['user']['image'] ?>" width="180" height="180" style="cursor: pointer;" >
                    <span id="browse" title="Edit Profile" class="position-absolute d-none" style="bottom: 10px; right: 80px; cursor: pointer;" >
                        <i class="fa-solid fa-pen-to-square text-lg text-white"></i>
                    </span>
                </div>
                <?php if(isset($data['user']['image'])) : ?>
                    <input type="hidden" name="oldImage" value="<?= $data['user']['image'] ?>">
                <?php endif; ?>
                <input name="image" accept="image/*" type="file" class="form-control d-none" id="InputFile" >
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="nama" class="form-label" >Nama</label>
                            <input name="nama" value="<?= $data['user']['nama'] ?>" type="text" class="form-control" id="nama" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" >email</label>
                            <input name="email" value="<?= $data['user']['email'] ?>" type="text" class="form-control" id="email" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label" >No Hp</label>
                            <input name="nomor_telepon" value="<?= $data['user']['nomor_telepon'] ?>" type="text" class="form-control" id="no_hp" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label" >Alamat</label>
                            <input name="alamat" value="<?= $data['user']['alamat'] ?>" type="text" class="form-control" id="alamat" disabled>
                        </div>
                        <div class="align-self-end">
                            <a class="btn btn-danger mr-3 d-none BtnCancel">Cancel</a>
                            <a class="btn btn-warning mr-3 BtnEdit">Edit Profile</a>
                            <button type="submit" class="btn btn-primary d-none BtnUpdate">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php require_once __DIR__ . "/../Layouts/Foot.php" ?>
<script src="<?= BASEURL ?>/assets/js/profile.js"></script>