<?php require_once __DIR__ . "/../Layouts/Head.php" ?>

<div class="container-fluid ml-3 min-vh-100">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Insert New Book</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form class="d-flex flex-column" action="<?= BASEURL ?>/dashboard/admin/create" method="POST" >
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="judul">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Religious">Religious</option>
                        <option value="Historical Fiction">Historical Fiction</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Romance">Romance</option>
                        <option value="Biography">Biography</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" min="1990" max="2050" step="1" class="form-control" id="tahun_terbit" placeholder="1990 - 2050">
                </div>
                <div class="mb-3">
                    <label for="jumlah_copy" class="form-label">Jumlah Copy</label>
                    <input type="number" name="jumlah_copy" min="1" value="1" class="form-control" id="jumlah_copy">
                </div>
                <div class="align-self-end">
                    <a href="<?= BASEURL ?>/dashboard" class="btn btn-warning mr-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

<?php require_once __DIR__ . "/../Layouts/Foot.php" ?>