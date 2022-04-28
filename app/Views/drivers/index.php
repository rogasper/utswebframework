<?= $this->extend('layouts/baselayout')?>
<?= $this->section('content')?>
<div class="container text-center">
    <h1 class="text-brand-color">Daftar Driver</h1>
</div>
<div class="mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="user-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tipe Driver</td>
                                <td>Nama Driver</td>
                                <td>Informasi Tambahan</td>
                                <td>Versi Driver</td>
                                <td>Tanggal Rilis</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#user-table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('driver/ajaxList')?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
        });
    });
</script>
<?= $this->endSection()?>