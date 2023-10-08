


<?php include_once __DIR__ . "/Layouts/Head.php"; ?>

<main class="py-5">
<div class="container mt-5">
  <!--Section: Content-->
  <section class="text-center">
    <h4 class="mb-5"><strong>All Books</strong></h4>

    <div class="row justify-content-center px-lg-5">
      <?php foreach ($data['books'] as $book) : ?>
        <div class="col-lg-3 col-md-12 mb-4 mx-lg-3">
          <div class="card">
            <div class="bg-image hover-overlay ripple px-lg-3" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.20);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $book['judul'] ?></h5>
              <p class="card-text text-start">
                <small class="text-muted small">Oleh : <?= $book['pengarang'] ?></small> <br/>
                <small class="text-muted small">Penerbit : <?= $book['penerbit'] ?></small> <br/>
                <small class="text-muted small">Tahun : <?= $book['tahun_terbit'] ?></small>
              </p>
              <a href="#!" class="btn btn-primary">Borrow</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </section>

</div>
</main>

<?php include_once __DIR__ . "/Layouts/Foot.php"; ?>
