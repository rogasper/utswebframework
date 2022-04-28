<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PTIK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($nav == 'dashboard'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url()?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item <?= ($nav == 'about'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url('user')?>">
            <i class="fas fa-fw fa-eye"></i>
            <span>About Us</span></a>
    </li>

    <li class="nav-item <?= ($nav == 'product'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url('user')?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Products</span></a>
    </li>

    <li class="nav-item <?= ($nav == 'driver'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url('user')?>">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Drivers</span></a>
    </li>

    <li class="nav-item <?= ($nav == 'technology'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url('about')?>">
            <i class="fas fa-fw fa-school"></i>
            <span>Technologies</span></a>
    </li>

    <li class="nav-item <?= ($nav == 'contact'? 'active' : '')?>">
        <a class="nav-link" href="<?= base_url('about')?>">
            <i class="fas fa-fw fa-id-card-alt"></i>
            <span>Contact</span></a>
    </li>
        
    <!-- Divider -->
    <hr class="sidebar-divider">

    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>