<?php require_once __DIR__ . "/../Layouts/Head.php" ?>

<div class="container-fluid ml-3 min-vh-100">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit A Book</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form class="d-flex flex-column" action="<?= BASEURL ?>/dashboard/admin/edit" method="POST" >
                <input type="hidden" name="id" value="<?= $data['buku']['id'] ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" value="<?= $data['buku']['judul'] ?>" name="judul" class="form-control" id="judul">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" value="<?= $data['buku']['pengarang'] ?>" name="pengarang" class="form-control" id="pengarang">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" value="<?= $data['buku']['penerbit'] ?>" name="penerbit" class="form-control" id="penerbit">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Religious" <?php if($data['buku']['category'] == 'Religious') echo 'selected' ?> >Religious</option>
                        <option value="Historical Fiction" <?php if($data['buku']['category'] == 'Historical Fiction') echo 'selected' ?> >Historical Fiction</option>
                        <option value="Fiction" <?php if($data['buku']['category'] == 'Fiction') echo 'selected' ?> >Fiction</option>
                        <option value="Romance" <?php if($data['buku']['category'] == 'Romance') echo 'selected' ?> >Romance</option>
                        <option value="Biography" <?php if($data['buku']['category'] == 'Biography') echo 'selected' ?> >Biography</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" value="<?= $data['buku']['tahun_terbit'] ?>" name="tahun_terbit" min="1990" max="2050" step="1" class="form-control" id="tahun_terbit" placeholder="1990 - 2050">
                </div>
                <div class="mb-3">
                    <label for="jumlah_copy" class="form-label">Jumlah Copy</label>
                    <input type="number" value="<?= $data['buku']['jumlah_copy'] ?>" name="jumlah_copy" min="1" value="1" class="form-control" id="jumlah_copy">
                </div>
                <div class="align-self-end">
                    <a href="<?= BASEURL ?>/dashboard" class="btn btn-warning mr-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">Edit Book</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php require_once __DIR__ . "/../Layouts/Foot.php" ?>