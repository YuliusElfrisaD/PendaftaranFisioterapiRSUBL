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
                    <div class="alert alert-success martop-sm">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body mx-auto mt-5">
                    <form action="{{ route('jadwal.store') }}" method="POST" class="needs-validation" style="padding-top: .75em;" novalidate >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="mr-sm-2" for="inlineFormInput">No RM</label>
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 {{ $errors->has('id') ? ' is-invalid' : '' }}" id="inlineFormInput"  name="id" data-toggle="tooltip" title="No. RM" data-placement="right" required>
                            @if ($errors->has('id'))
                                <div class="invalid-feedback">
                                    Gunakan No RM seperti pada data Pasien
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control {{ $errors->has('NAMA') ? ' is-invalid' : '' }}" id="nama" type="text"  name="NAMA" data-toggle="tooltip" title="Nama" data-placement="right"required>
                            @if ($errors->has('NAMA'))
                            <div class="invalid-feedback">Harap masukan nama
                                {{ $errors->first('NAMA') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control {{ $errors->has('ALAMAT') ? ' is-invalid' : '' }}" rows="3" id="alamat" name="ALAMAT" data-toggle="tooltip" title="Alamat" data-placement="right" required></textarea>
                            @if ($errors->has('ALAMAT'))
                                <div class="invalid-feedback">Harap masukan alamat
                                    {{ $errors->first('ALAMAT') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Terapi</label>
                            <input class="form-control {{ $errors->has('TGL_TERAPI') ? ' is-invalid' : '' }}" id="tanggalLahir" type="date" placeholder="Masukan Tanggal Terapi" name="TGL_TERAPI" data-toggle="tooltip" title="Tanggal Terapi" data-placement="right" required>
                            @if ($errors->has('TGL_TERAPI'))
                                <div class="invalid-feedback">Harap masukan tanggal terapi
                                    {{ $errors->first('TGL_TERAPI') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir">Jam Terapi</label>
                            <input class="form-control {{ $errors->has('JAM_TERAPI') ? ' is-invalid' : '' }}" id="tanggalLahir" type="time" placeholder="Masukan Jam Terapi" name="JAM_TERAPI" data-toggle="tooltip" title="Jam Terapi" data-placement="right" required>
                            @if ($errors->has('JAM_TERAPI'))
                                <div class="invalid-feedback">Harap masukan jam terapi
                                    {{ $errors->first('JAM_TERAPI') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection