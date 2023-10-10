 <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbar"
          aria-controls="navbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        
        <div class="collapse navbar-collapse" id="navbar">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">Perpusku</a>
          <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php if (empty($_SERVER['PATH_INFO'])) echo 'active' ?>" href="<?= BASEURL ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Writer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Category</a>
            </li>
          </ul>
        </div>

     

        <div class="d-flex align-items-center portal">
          <?php if (isset($_SESSION['auth'])): ?>
            <a href="<?= BASEURL ?>/dashboard" class="btn btn-primary me-3">Dashboard</a>
          <?php else: ?>
            <a href="<?= BASEURL ?>/login" class="btn btn-link px-3 me-3" >Login</a>
            <a href="<?= BASEURL ?>/register" class="btn btn-primary me-3">Register</a>
          <?php endif; ?>
        </div>
      </div>
    </nav>