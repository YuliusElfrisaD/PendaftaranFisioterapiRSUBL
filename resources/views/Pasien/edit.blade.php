@extends('layouts.isi')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-user"></i> Edit Data Pasien 
                </div>
                @if ($message = Session::get('message'))
                    <div class="alert alert-success martop-sm">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body mx-auto mt-5">
                    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" class="needs-validation" novalidate>
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="noRM">No RM</label>
                            <input class="form-control" id="noRM" type="number" placeholder="Masukan No RM" name="id" value="{{ $pasien->id }}" data-toggle="tooltip" title="No. RM" data-placement="right" required>
                            <div class="invalid-feedback">Harap masukan No RM</div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" id="nama" type="text" placeholder="Masukan Nama" name="NAMA" value="{{ $pasien->NAMA }}" data-toggle="tooltip" title="Nama" data-placement="right"required>
                            <div class="invalid-feedback">Harap masukan nama</div>
                        </div>
                        <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggalLahir" type="date" placeholder="Masukan Tanggal Lahir" name="TGL_LAHIR" value="{{ $pasien->TGL_LAHIR }}" data-toggle="tooltip" title="Tanggal Lahir" data-placement="right" data-date-format="DD MM YYYY" required>
                                    <div class="invalid-feedback">Harap masukan tanggal lahir</div>
                        </div>
                        <div class="form-group">
                            <label for="umur">UMUR</label>
                            <input class="form-control" id="umur" type="number" placeholder="Masukan Umur" name="UMUR"  value="{{ $pasien->UMUR }}" data-toggle="tooltip" title="Umur" data-placement="right" required>
                            <div class="invalid-feedback">Harap masukan UMUR</div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nama">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8" style="text-align: right;">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="JENIS_KELAMIN" value="{{ $pasien->JENIS_KELAMIN }}" id="laki" value="L" required>
                                        <label class="custom-control-label" for="laki">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="JENIS_KELAMIN" value="{{ $pasien->JENIS_KELAMIN }}" id="perempuan" value="P"  required>
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="invalid-feedback">Harap pilih salah satu jenis kelamin</div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control" rows="3" id="alamat" name="ALAMAT" data-toggle="tooltip" title="Alamat"  data-placement="right" required>{{ $pasien->ALAMAT }}</textarea>
                            <div class="invalid-feedback">Harap masukan alamat</div>
                        </div>
                        <div class="form-group">
                            <label for="noTelp">No Telepon</label>
                            <input class="form-control" id="noTelp" type="number" placeholder="Masukan No Telepon" name="NO_TELP" value="{{ $pasien->NO_TELP }}" data-toggle="tooltip" title="No. Telpon" data-placement="right" required>
                            <div class="invalid-feedback">Harap masukan No Telepon</div>
                        </div>
                        <center><button type="submit" class="btn btn-primary">Tambah</button></center>
                    </form>
                </div>
            </div>
@endsection