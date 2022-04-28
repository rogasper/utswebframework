<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<div class="container">
    <form method="GET" action="" class="form-group navbar-search">
        <div class="row">
            <div class="col-lg-12">
                <div class="input-group mb-3">
                <input type="text" class="form-control bg-light border-primary small" name="cari" placeholder="Mencari Data Berdasarkan Nama" value="<?= $kunci?>">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
                </div>
                </div>
            </div>
            <div class="col-lg-12">
                <?php echo $jumlah; ?>
            </div>
        </div>
    </form>

    <div class="product-card">
        <div class="row">
            <?php 
                $no=1+(10*($page-1));
                foreach ($list as $item) :
            ?>
            <div class="col-md-4 col-sm-12">
                <div class="card text-left mb-3" style="width: 18rem;">
                    <img src="<?= $item['foto_produk'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-brand-color"><?= $item['nama_produk']?></h4>
                        <p class="card-text"><?= substr($item['deskripsi_produk'], 0, 100)?>...</p>
                        <p class="card-text font-weight-bold"> Rp.<?= $item['harga']?></p>
                        <a class="btn btn-success" href="<?= base_url('product/' . $item['id'])?>">Detail Produk</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   
    <div class="pagination mt-5">
        <?= $pager->Links()?>
    </div>
</div>
<?= $this->endSection()?>