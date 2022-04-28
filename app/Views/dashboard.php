<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<div class="header-section" style="margin-top: -30px;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/mfg/hopper-promo-wmfg-1024x440-t.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>First slide label</h2>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/mfg/nvidia-studio-in-the-fekri-nv-gf-wmfg-1024-t.jpg
" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Second slide label</h2>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/mfg/nvidia-launchpad-wmfg-1024x440-t.jpg
" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Third slide label</h2>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/mfg/jetson-orin-wmfg-1024x440-t.jpg
" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Third slide label</h2>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/mfg/get-started-riva-wmfg-1024x440-t.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Third slide label</h2>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

<!-- Shop Section -->
<div class="shop-section mt-5 pr-5 pl-5">
    <div class="text-center">
        <h1 class="text-brand-color mb-3">SHOP</h1>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/gf-ces22-30-series-lt-refresh-learn-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">GeForce RTX 30 Series Laptops</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-ampere-rtx-30-series-learn-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">GeForce RTX Series Graphics Cards</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/nv-wfh-laptops-sfg-295x166@2x.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">WORK. PLAY. CREATE.</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/studio-ins-averkin-04262022-owned-blog-banners-studio-blog-preview-img-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">In the NVIDIA Studio</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gaming Section -->
<div class="gaming-section mt-5 pr-5 pl-5">
    <div class="text-center">
        <h1 class="text-brand-color mb-3">GAMING</h1>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/gf-ces22-post-round-up-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">CES 2022 Announcements</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-rtx-grd-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">Game Ready Drivers</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-esports-reflex-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA Reflex</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/nvidia-dlss-2.0-sfg-295x166-dtm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA DLSS</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News -->
<div class="news-section mt-5 pr-5 pl-5">
    <div class="text-center">
        <h1 class="text-brand-color mb-3">LATEST NEWST</h1>
        <div class="row mb-3">
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/gf-ces22-post-round-up-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">CES 2022 Announcements</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-rtx-grd-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">Game Ready Drivers</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-esports-reflex-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA Reflex</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/nvidia-dlss-2.0-sfg-295x166-dtm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA DLSS</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/gf-ces22-post-round-up-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">CES 2022 Announcements</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-rtx-grd-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">Game Ready Drivers</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/geforce-esports-reflex-nv-sfg-295x166.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA Reflex</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card text-left" style="width: 18rem;">
                    <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/homepage/sfg/nvidia-dlss-2.0-sfg-295x166-dtm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color">NVIDIA DLSS</h4>
                        <p class="card-text">Powering the world’s fastest laptops for gamers and creators. With new AI-powered Max-Q technologies that optimize laptops to deliver high performance in thin form factors.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            
<?= $this->endSection()?>
            