@extends('layouts.isi')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-drivers-license-o"></i> Riwayat Terapi Pasien - {{ $pasien->NAMA }}
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No RM</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->id }} ">
                        </div>

                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->NAMA }}  ({{$pasien->JENIS_KELAMIN}})" >
                        </div>

                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->ALAMAT }}">
                        </div>

                        <label for="staticEmail" class="col-sm-2 col-form-label">Umur Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->UMUR }}">
                        </div>

                        <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->TGL_LAHIR }}">
                        </div>

                        <label for="staticEmail" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $pasien->NO_TELP }}">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Terapi</th>
                                <th>Jam Terapi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Terapi</th>
                                <th>Jam Terapi</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            @foreach ($jadwal as $j )
                            <tr>
                                <td></td>
                                <td>{{ $j->TGL_TERAPI }}</td>
                                <td>{{ $j->JAM_TERAPI }}</td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
@endsection