<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <a class="navbar-brand" href="#"><img src="https://logos-download.com/wp-content/uploads/2016/10/Nvidia_logo.png" alt="nvidia" width="64"></a>
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item <?= ($nav == 'dashboard'? 'active' : '')?>" style="color: black !important;">
                <a class="nav-link" href="<?= base_url()?>">Home</a>
            </li>
            <li class="nav-item <?= ($nav == 'about'? 'active' : '')?>">
                <a class="nav-link" href="<?= base_url('about')?>">About Us</a>
            </li>
            <li class="nav-item <?= ($nav == 'product'? 'active' : '')?>">
                <a class="nav-link" href="<?= base_url('product')?>">Products</a>
            </li>
            <li class="nav-item <?= ($nav == 'driver'? 'active' : '')?>">
                <a class="nav-link" href="<?= base_url('driver')?>">Drivers</a>
            </li>
            <li class="nav-item <?= ($nav == 'technology'? 'active' : '')?>">
                <a class="nav-link" href="<?= base_url('technology')?>">Technologies</a>
            </li>
            <li class="nav-item <?= ($nav == 'contact'? 'active' : '')?>">
                <a class="nav-link" href="<?= base_url('contact')?>">Contact</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
        </ul>
    </div>

    

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">



        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">K3519074 | Royan Gagas Pradana</span>
                <img class="img-profile rounded-circle"
                    src="<?= base_url('assets/img/undraw_profile.svg')?>">
            </a>
        </li>

    </ul>

</nav>