


<?php include_once __DIR__ . "/Layouts/Head.php"; ?>

<main class="py-5 min-vh-50">
<div class="container mt-5">
  <!--Section: Content-->
  <section class="text-center">
    <h4 class="mb-3"><strong>All Books</strong></h4>
    <div class="input-group mb-4 d-flex justify-content-center align-items-center">
      <form action="<?= BASEURL ?>" class="col-lg-5" id="InputSearch">
        <div class="form-outline mb-3">
          <input name="q" id="search-input" id="form1" class="form-control mt-3" placeholder="Search" value="<?= $_GET['q'] ?? false ?>" />
        </div>
      </form>
      <button id="search-button" type="submit" class="btn btn-primary" form="InputSearch" >
        <i class="fas fa-search"></i>
      </button>
    </div>
    <div class="row justify-content-center px-lg-5">
      <?php if (count($data['books']) > 0 ): ?>
        <?php foreach ($data['books'] as $book) : ?>
          <div class="col-lg-3 col-md-12 mb-4 mx-lg-3">
            <div class="card mb-1">          
              <div class="bg-image hover-overlay ripple px-lg-3" data-mdb-ripple-color="light">
                <span class="position-absolute px-2 py-1 z-1 " style="background-color: rgba(0, 0, 0, .8);" >
                  <a class="text-decoration-none text-white" href="<?= BASEURL ?>/?c=<?= $book['category'] ?><?= isset($_GET['q']) ? '&q=' : '' ?><?= $_GET['q'] ?? false ?>"><?= $book['category'] ?></a> 
                </span>
                <img src="https://source.unsplash.com/160x175?<?= $book['category'] ?>" class="img-fluid" loading="lazy" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.20);"></div>
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?= $book['judul'] ?></h6>
                <p class="card-text text-start">
                  <small class="text-muted small">Oleh : <?= $book['pengarang'] ?></small> <br/>
                  <small class="text-muted small">Penerbit : <?= $book['penerbit'] ?></small> <br/>
                  <small class="text-muted small">Tahun : <?= $book['tahun_terbit'] ?></small> <br/>
                  <small class="text-muted small">Tersedia : <?= $book['jumlah_copy'] ?></small>
                </p>
                <a href="#!" class="btn btn-primary">Borrow</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="h2 text-center my-5">No Books Found !</div>
      <?php endif; ?>
    </div>

  </section>

</div>
</main>

<?php include_once __DIR__ . "/Layouts/Foot.php"; ?>
