<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<div class="detail-section container mb-5">
    <div class="row">
            <div class="col-md-5">
                <img src="<?= $list['foto_produk']?>" alt="<?= $list['nama_produk']?>" class="rounded img-fluid shadow">
            </div>
            <div class="col-md-7">
                <div class="card p-3 shadow">
                    <h4><?= $list['nama_produk']?></h4>
                    <p class="card-text font-weight-bold"> Rp.<?= $list['harga']?></p>
                    <h6>Deskripsi Produk:</h6>
                    <p><?= $list['deskripsi_produk']?></p>
                    <h6>Fitur Produk:</h6>
                    <p><?= $list['fitur_produk']?></p>
                    <a href="https://www.tokopedia.com/search?st=product&q=<?= $list['nama_produk']?>&srp_component_id=02.01.00.00" class="btn btn-success p-2" >BELI PRODUK</a>
                    <a href="<?= base_url('product')?>" class="btn btn-info mt-3 p-2" >KEMBALI</a>
                </div>
            </div>
    </div>
</div>
<?= $this->endSection()?>