<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Akun Baru</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/rsubl.jpeg') }}"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body style="background: #00c6fb">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header"><i class="fa fa-user"></i> Daftar Akun Baru</div>
        <div class="card-body">
            <form class="needs-validation" action="{{ route('register') }}"  method="POST" novalidate>
                {{ csrf_field() }}
                <div class="form-group ">
                    <label for="name">Nama</label>
                    <input class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" id="name" type="text" placeholder="Masukan Nama" name="name"  value="{{ old('name') }}" required autofocus>
                    <div class="invalid-feedback">Harap masukan nama</div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" id="email" type="email" placeholder="Masukan Email" name="email" value="{{ old('email') }}" required required>
                    <div class="invalid-feedback">Harap masukan email</div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control{{ $errors->has('username') ? ' has-error' : '' }}" id="username" type="text" placeholder="Masukan Username" name="username" value="{{ old('username') }}" required autofocus>
                    <div class="invalid-feedback">Harap masukan username</div>
                    @if ($errors->has('username'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" id="password" type="password" placeholder="Masukan Password" name="password" required>
                            <div class="invalid-feedback">Harap masukan password</div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Re-password</label>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" id="exampleConfirmPassword" type="password" placeholder="Masukan ulang password" required>
                            <div class="invalid-feedback">Harap masukan ulang password</div>
                        </div>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary">Daftar</button></center>
            </form>
            <div class="text-center">
                <a href="/" class="d-block small mt-3" href="login.html">Login Page</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ asset('/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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
<script>
    (function() {
        var password = document.getElementById("exampleInputPassword1")
            , confirm_password = document.getElementById("exampleConfirmPassword");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Tidak Sama");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    })();
</script>
</body>

</html>














