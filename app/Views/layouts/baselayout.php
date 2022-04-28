<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="https://www.logo.wine/a/logo/Nvidia/Nvidia-Light-Vertical-Dark-Background-Logo.wine.svg" type="image/x-icon">

    <title class="text-upper">NVIDIA - <?= $nav; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        <?= $this->include('layouts/components/topbar')?>
        <!-- Main Content -->
        <div id="content">
        <?= $this->renderSection('content')?>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="row mb-4">
                        <div class="col-md-4 text-light">
                            <h3 class="border-bottom border-light">Corporate Information</h3>
                            <ul class="list-group">
                                <li class="list-group-item bg-dark text-brand-color">An item</li>
                                <li class="list-group-item bg-dark text-brand-color">A second item</li>
                                <li class="list-group-item bg-dark text-brand-color">A third item</li>
                                <li class="list-group-item bg-dark text-brand-color">A fourth item</li>
                                <li class="list-group-item bg-dark text-brand-color">And a fifth one</li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-light">
                            <h3 class="border-bottom border-light">Get Involved</h3>
                            <ul class="list-group">
                                <li class="list-group-item bg-dark text-brand-color">An item</li>
                                <li class="list-group-item bg-dark text-brand-color">A second item</li>
                                <li class="list-group-item bg-dark text-brand-color">A third item</li>
                                <li class="list-group-item bg-dark text-brand-color">A fourth item</li>
                                <li class="list-group-item bg-dark text-brand-color">And a fifth one</li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-light">
                            <h3 class="border-bottom border-light">News & Events</h3>
                            <ul class="list-group">
                                <li class="list-group-item bg-dark text-brand-color">An item</li>
                                <li class="list-group-item bg-dark text-brand-color">A second item</li>
                                <li class="list-group-item bg-dark text-brand-color">A third item</li>
                                <li class="list-group-item bg-dark text-brand-color">A fourth item</li>
                                <li class="list-group-item bg-dark text-brand-color">And a fifth one</li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright text-center my-auto text-light">
                        <span>Copyright &copy; Royan Gagas 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('scripts')?>
    <!-- Bootstrap core JavaScript-->
    
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?= base_url('assets/js/demo/chart-pie-demo.js')?>"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
</body>

</html>