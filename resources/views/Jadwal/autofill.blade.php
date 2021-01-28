@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-plus-circle"></i> Tambah Jadwal
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
                <form action="{{ route('cekNoRM')}}" method="GET" class="needs-validation" style="padding-top: .75em;" novalidate >
                    {{csrf_field()}}
                    <div class="form-group form-inline">
                        <label class="mr-sm-2" for="cekNoRM">Cek No RM</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 {{ $errors->has('noRM') ? ' is-invalid' : '' }}" id="cekNoRM"  name="CekNoRM" data-toggle="tooltip" title="No. RM" data-placement="right" required>
                        <button type="submit" class="btn btn-primary">Cek No RM</button>
                        @if ($errors->has('noRM'))
                        <div class="invalid-feedback">
                            Harap Masukan No RM sesuai data pasien
                        </div>
                        @endif
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection