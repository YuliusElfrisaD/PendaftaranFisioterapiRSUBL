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
                        <label id="noRMLabel" for="noRMIsi" class="col-sm-2 col-form-label">No RM</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="noRMIsi" value=": {{ $pasien->id }} ">
                        </div>

                        <label id="namaLabel" for="staticEmail" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="namaIsi" value=": {{ $pasien->NAMA }}  ({{$pasien->JENIS_KELAMIN}}) " >
                        </div>

                        <label id="alamatLabel" for="staticEmail" class="col-sm-2 col-form-label">Alamat Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="alamatIsi" value=": {{ $pasien->ALAMAT }} ">
                        </div>

                        <label id="umurLabel" for="staticEmail" class="col-sm-2 col-form-label">Umur Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="umurIsi" value=": {{ $pasien->UMUR }} ">
                        </div>

                        <label id="tglLahirLabel" for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="tglLahirIsi" value=": {{ Carbon\Carbon::parse($pasien->TGL_LAHIR)->format('d-m-Y') }} ">
                        </div>

                        <label id="noTelpLabel" for="staticEmail" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="noTelpIsi" value=": {{ $pasien->NO_TELP }} ">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="test" width="100%" cellspacing="0">
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
                                <th class="cari">Tanggal Terapi</th>
                                <th class="cari">Jam Terapi</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            @foreach ($jadwal as $j )
                            <tr>
                                <td></td>
                                <td>{{ Carbon\Carbon::parse($j->TGL_TERAPI)->format('d-m-Y')  }}</td>
                                <td>{{ Carbon\Carbon::parse($j->JAM_TERAPI)->format('H:i')  }}</td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
@endsection