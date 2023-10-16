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

        
        <div class="collapse navbar-collapse ms-3 ms-lg-0 pt-3 pt-lg-0" id="navbar">
          <a class="navbar-brand mt-2 mt-lg-0 d-none d-lg-block" href="#">Perpusku</a>
          <ul class="navbar-nav ms-lg-5 mb-2 mb-lg-0">
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
          <div class="d-flex flex-column flex-lg-row ms-auto">
            <?php if (isset($_SESSION['auth'])): ?>
              <a href="<?= BASEURL ?>/dashboard" class="btn btn-primary me-3 d-lg-none">Dashboard</a>

              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-lg-inline text-gray-600 medium">
                            <?php 
                                if (isset($_SESSION['auth']['admin'])) {
                                    echo "Admin, Welcome !";
                                } elseif (isset($_SESSION['auth']['anggota'])) {
                                  echo $_SESSION['auth']['user']['nama'] ?? false;
                                }
                            ?>
                        </span>
                        <img class="img-profile rounded-circle border" src="<?= BASEURL ?>/public/assets/img/pp.jpg" width="30" >
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <?php if(empty($_SESSION['auth']['admin'])): ?>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Profile
                          </a> 
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?= BASEURL ?>/dashboard">
                            <i class="fas fa-fw fa-tachometer-alt mr-2 text-gray-400"></i>
                            Dashboard
                        </a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>

            <?php else: ?>
              <a href="<?= BASEURL ?>/login" class="btn btn-link px-3 me-3 mb-2 mb-lg-0 login" >Login</a>
              <a href="<?= BASEURL ?>/register" class="btn btn-primary me-3 register">Register</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
  </nav>