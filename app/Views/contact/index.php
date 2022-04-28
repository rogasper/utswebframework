<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<!-- Header -->
<div class="header-section background-section-grey" style="height: 746px; margin-top: -30px;">
    <div class="container text-center">
        <h1 class="text-brand-color" style="padding-top: 7rem;">CONTACT NVIDIA</h1>
        <h3 class="text-dark">GET YOUR QUESTIONS ANSWERED.</h3>
        <div class="row pt-5">
            <div class="col-md-4">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/contact/nv-corporate-contact-us-icon-help-160x161-udtm@2x.png" alt="asa">
                <h3 class="text-brand-color">SUPPORT</h3>
                <p>Get help with your existing NVIDIA products and services.</p>
                <button class="btn btn-success p-3">GET SUPPORT</button>
            </div>
            <div class="col-md-4 border-left border-right border-dark">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/contact/nv-corporate-contact-us-icon-headset-mic-132x161-udtm@2x.png" alt="asa">
                <h3 class="text-brand-color">ENTERPRISE SALES</h3>
                <p>Connect with an NVIDIA Sales Representative and get purchase info.</p>
                <button class="btn btn-success p-3">CONTACT SALES</button>
            </div>
            <div class="col-md-4">
                <img src="https://www.nvidia.com/content/dam/en-zz/es_em/Solutions/contact/nv-corporate-contact-us-icon-people-252x161-udtm@2x.png" alt="asa">
                <h3 class="text-brand-color">FIND A PARTNER</h3>
                <p>Find experienced, professional partners.</p>
                <button class="btn btn-success p-3">LOCATE PARTNERS</button>
            </div>
        </div>
    </div>
</div>
<!-- Address -->
<div class="address-section pt-5">
    <div class="container">
        <h1 class="text-brand-color">NVIDIA CORPORATE</h1>
        <h5 class="mt-3">2788 San Tomas Expressway <br>Santa Clara, CA 95051</h5>
        <a href="https://www.google.com/maps/place/NVIDIA+Corporation/@37.3705396,-121.968938,17z/data=!3m1!4b1!4m5!3m4!1s0x808fca2702c480db:0x76527847b95e08c9!8m2!3d37.3705354!4d-121.9667493" class="text-brand-color">View Directions Map</a>
        <br>
        <a href="https://www.nvidia.com/content/dam/en-zz/Solutions/support/VisitoMap.pdf" class="text-brand-color">View Campus Map</a>
        <p class="mt-3">Tel: +1 (408) 486-2000</p>
        <p class="mt-3">info@nvidia.com</p>
        <h6 class="mt-4">Investor Inqueries:</h6>
        <p>(877) 7-NVIDIA</p>
        <h6 class="mt-4">Product Support:</h6>
        <p>Visit our <a href="https://www.nvidia.com/object/support.html" class="text-brand-color">Support</a> page or chat
with a Customer <a href="https://www.nvidia.com/nvcc/" class="text-brand-color">Care</a> agent.</p>
    </div>
</div>
<?= $this->endSection()?>