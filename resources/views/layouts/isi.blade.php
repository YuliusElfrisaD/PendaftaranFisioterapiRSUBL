<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Penjadwalan Fisioterapi RSU-Bethesda Lempuyangwangi</title>
    <!-- Icon-->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/rsubl.jpeg') }}"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/datatables/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('home') }}">Penjadwalan Fisioterapi RSU-Bethesda Lempuyangwangi</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lihat Jadwal">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fa fa-fw fa-calendar"></i>
                    <span class="nav-link-text">Lihat Jadwal</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cek Kuota">
                <a class="nav-link" href="{{ route('kuota') }}">
                    <i class="fa fa-fw fa-book"></i>
                    <span class="nav-link-text">Cek Kuota</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Jadwal">
                <a class="nav-link" href="{{ route('autofill') }}">
                    <i class="fa fa-fw fa-plus-circle"></i>
                    <span class="nav-link-text">Tambah Jadwal</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Pasien Baru">
                <a class="nav-link" href="{{ route('create.pasien') }}">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Tambah Pasien Baru</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lihat Data Pasien">
                <a class="nav-link" href="{{ route('dataPasien') }}">
                    <i class="fa fa-fw fa-drivers-license-o"></i>
                    <span class="nav-link-text">Lihat Data Pasien</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Logged as  {{ Auth::user()->name }} <span class="caret"></span> <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        <a class="nav-link" style="color:#0A0000" href="{{ route('profile') }}">
                            <i class="fa fa-fw fa-user" style="color:#0A0000"></i>Profile
                        </a>
                        <a class="nav-link" style="color:#0A0000" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-sign-out" style="color:#0A0000"></i>Logout
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </h6>
                </div>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>&copy; Copyright 2018 | Osmond Giovanni I & Yulius Elfrisa D | Teknik Informatika Universitas Sanata Dharma</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('assets/js/sb-admin-datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-datatables.js') }}"></script>

<!-- Custom scripts for this page-->
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/datatables/buttons.print.min.js') }}"></script>

{{--<script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</div>
</body>

</html>
