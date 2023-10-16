


<?php

use Perpus\Perpusku\Core\Flasher;

 include_once __DIR__ . "/Layouts/Head.php"; ?>

<main class="py-5 min-vh-50">
<div class="container mt-5">
  <!--Section: Content-->
  <section class="text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?= Flasher::flash('anggota/index') ?? false ?>
      </div>
    </div>
    <h4 class="mb-3"><strong>All Books</strong></h4>
    <div class="input-group mb-4 d-flex flex-nowrap justify-content-center align-items-center">
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
          <div class="col-lg-3 col-md-6 mb-4 mx-lg-3">
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
                <p class="card-text text-center">
                  <small class="text-muted small">Oleh : <?= $book['pengarang'] ?></small> <br/>
                  <small class="text-muted small">Penerbit : <?= $book['penerbit'] ?></small> <br/>
                  <small class="text-muted small">Tahun : <?= $book['tahun_terbit'] ?></small> <br/>
                  <small class="text-muted small">Tersedia : <?= $book['jumlah_copy'] ?></small>
                </p>
                <a href="#" class="btn btn-primary borrow" data-id="<?= $book['id'] ?>" >Borrow</a>
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


<!-- modal -->
<button type="button" id="btnModal" class="btn btn-primary invisible" data-bs-toggle="modal" data-bs-target="#mymodal"></button>
<div class="modal" id="mymodal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Borrow This Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-danger mb-3">* This book must be returned 3 days after the loan is approved</p>
        <div class="row">
          <div class="col-4">
            <img class="img-fluid shadow modal-image" loading="lazy" />
          </div>
          <div class="col-8 small pl-lg-3 lh-1">
            <p id="modal-title" ></p>
            <p id="modal-pengarang" ></p>
            <p id="modal-penerbit" ></p>
            <p id="modal-category" ></p>
            <p id="modal-tahun" ></p>
            <form id="modal-borrow" action="<?= BASEURL ?>/dashboard/anggota/borrow" method="POST">
              <input type="hidden" id="modal-id" name="id" >        
              <span class="d-flex justify-content-center align-items-center" >
                <span class="bg-primary px-4 py-2 rounded text-white minus" style="cursor: pointer;" >
                  <i class="fa-solid fa-minus fs-5"></i>
                </span>              
                <input id="modal-jumlah" class="border-0 text-center text-bold" type="text" name="jumlah" value="1" placeholder="1" readonly >
                <span class="bg-primary p-4 py-2 rounded text-white plus" style="cursor: pointer;" >
                  <i class="fa-solid fa-plus fs-5"></i>
                </span>
              </span>         
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="modal-borrow" class="btn btn-primary">Borrow</button>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . "/Layouts/Foot.php"; ?>
