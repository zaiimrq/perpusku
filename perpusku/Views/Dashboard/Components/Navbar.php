<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow px-3">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">
                    <?php 
                        if (isset($_SESSION['auth']['admin'])) {
                            echo "Admin, Welcome !";
                        } elseif (isset($_SESSION['auth']['anggota'])) {
                           echo $_SESSION['auth']['user']['nama'] ?? false;
                        }
                    ?>
                </span>
                <img class="img-profile rounded-circle border" src="<?= BASEURL ?>/public/assets/img/pp.jpg">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <?php $auth ?>
                <?php if(empty($_SESSION['auth']['admin'])): ?>
                    <a class="dropdown-item" href="<?= BASEURL ?>/dashboard/anggota/profile">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                <?php endif; ?>                        
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>