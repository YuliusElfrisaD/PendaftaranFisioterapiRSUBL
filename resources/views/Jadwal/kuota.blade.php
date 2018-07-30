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
     
        @if ($message = Session::get('message'))
                    <div class="alert alert-success martop-sm">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                @if ($message = Session::get('flash_message_danger'))
                    <div class="alert alert-danger martop-sm">
                        <p>{{ $message }}</p>
                    </div>
                @endif

        <div class="card-body mx-auto mt-5">
            <form action="{{ route('cek') }}" method="GET" class="needs-validation" style="padding-top: .75em;">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Jam Terapi</label>
                    <input class="form-control" id="" type="time" placeholder="Masukan Jam Terapi" name="JAM_TERAPI" data-toggle="tooltip" title="Jam Terapi" data-placement="right" required>
                </div>
                <button type="submit" class="btn btn-primary">cek</button>
            </form>
        </div>
    </body>
</html>