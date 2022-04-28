<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<h1 class="text-center font-weight-bold text-brand-color mb-5">Teknologi NVIDIA</h1>
<div class="row m-3">
    <div class="row d-flex justify-content-center">
    <?php foreach($technology as $fa):?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-left text-brand-color"><?= $fa['id']?>. <?= $fa['teknologi']?></h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="<?= $fa['thumbnail']?>" alt="<?= $fa['id']?>" class="img-fluid rounded shadow">
                    </div>
                    <div class="">
                        <p class="text-justify p-3"><?= $fa['deskripsi']?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>
<?= $this->endSection()?>