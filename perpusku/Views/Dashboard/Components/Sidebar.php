<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASEURL ?>/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">perpusku <sup>❤️</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
    </li>
    <?php if($_SESSION['auth']['admin'] ?? false): ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Administrator
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <i class="fa-solid fa-circle-info"></i>
                <span>Preference</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage</h6>
                    <a class="collapse-item" href="<?= BASEURL ?>/dashboard/admin/borrow">Borrowed</a>
                    <a class="collapse-item" href="https://instagram.com/zaiimrq">Instagram</a>
                </div>
            </div>
        </li>
    <?php endif; ?>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Interface
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-circle-info"></i>
            <span>About Us</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Social Media:</h6>
                <a class="collapse-item" href="https://facebook.com/zaiimrq">Facebook</a>
                <a class="collapse-item" href="https://instagram.com/zaiimrq">Instagram</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>