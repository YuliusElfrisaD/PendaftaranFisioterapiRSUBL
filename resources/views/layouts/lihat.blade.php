<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pendaftaran Fisioterapi RSU-Bethesda Lempuyangwangi</title>
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
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">Pendaftaran Fisioterapi RSU-Bethesda Lempuyangwangi</a>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="text-center">
            <small style="color: white">&copy; Copyright 2018 | Osmond Giovanni I & Yulius Elfrisa D | Teknik Informatika Universitas Sanata Dharma</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
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
<!-- Custom scripts for this page-->
<script src="{{ asset('assets/js/sb-admin-datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>

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
