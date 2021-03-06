@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-book"></i> Cek Kuota 
            </div>
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
                <form action="{{ route('cek') }}" method="GET" class="needs-validation" style="padding-top: .75em;" novalidate >
                    {{csrf_field()}}
                    <div class="form-group form-inline">
                        <label class="mr-sm-2" for="cekKuota">Cek Kuota</label>
                        <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0 {{ $errors->has('cekKuota') ? ' is-invalid' : '' }}" 
                               id="cekKuota"  name="cekKuota" data-toggle="tooltip"
                               title="cekKuota" data-placement="right" data-date-format="DD MM YYYY" 
                               min="today" required>
                        <button type="submit" class="btn btn-primary">Cek Kuota</button>
                        @if ($errors->has('cekKuota'))
                        <div class="invalid-feedback">
                            Harap Masukan Tanggal Terapi
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection