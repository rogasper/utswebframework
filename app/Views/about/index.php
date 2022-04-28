<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<!-- Header -->
<div class="header-section img-fluid" style="background-image: url('https://www.nvidia.com/content/dam/en-zz/Solutions/about-us/nvidia-corporation-about-us-banner-1023-t.jpg'); height: 440px; margin-top: -30px; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-brand-color " style="padding-top: 5rem;">NVIDIA'S INVENTION OF THE GPU</h1>
                <p class="text-light">In 1999 sparked the growth of the PC gaming market, redefined modern computer graphics, and revolutionized parallel computing. More recently, GPU deep learning ignited modern AI — the next era of computing — with the GPU acting as the brain of computers, robots, and self-driving cars that can perceive and understand the world.</p>
                <a class="btn btn-success p-3" href="https://images.nvidia.com/nvimages/aem-dam/Solutions/about-us/documents/NVIDIA-v2.pdf">WHO ARE WE</a>
            </div>
        </div>
    </div>
</div>

<!-- about -->
<div class="about-section mt-5 container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-history-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">HISTORY</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-executive-bios-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">EXECUTIVE BIOS</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-careers-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">CAREERS</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-nvidia-university-relations-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">UNIVERSITY RECRUITING</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-endeavour-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">LOCATIONS</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-nvidia-awards-407-ud.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-brand-color">AWARDS</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- kerjasama -->
<div class="kerjasama-section mt-5 p-5" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-nvidia-research-407-ud.jpg" class="img-fluid" alt="asa">
                <h3 class="text-brand-color">NVIDIA RESEARCH</h3>
                <p>Explore the frontiers of parallel, visual, and AI computing.</p>
                <button class="btn btn-success p-3">LEARN MORE</button>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/about-us/nvidia-corporation-about-us-nvidia-partner-network-407-ud.jpg" class="img-fluid" alt="asa">
                <h3 class="text-brand-color">NVIDIA PARTNER NETWORK (NPN)</h3>
                <p>Leverage NVIDIA's world-class brands and technology platforms.</p>
                <button class="btn btn-success p-3">LEARN MORE</button>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://www.nvidia.com/content/dam/en-zz/Solutions/about-us/nvidia-corporation-about-us-nvidia-policies-407-ud.jpg" class="img-fluid" alt="asa">
                <h3 class="text-brand-color">POLICIES</h3>
                <p>Read the policies that help guide how we conduct business.</p>
                <button class="btn btn-success p-3">LEARN MORE</button>
            </div>
        </div>
    </div>
</div>

<!-- Learn more section -->
<div class="learn-section bg-dark-green p-5">
    <div class="container text-center">
        <h1 class="text-brand-color">READY TO LEARN MORE?</h1>
        <p class="text-light pt-3">Get answers to all your support, sales, and partner questions.</p>
        <button class="btn btn-success p-3">LEARN MORE</button>
    </div>
</div>
<?= $this->endSection()?>