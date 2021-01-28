@extends('layouts.lihat')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Jadwal Fisioterapi
                </div>
                <div class="card-body">

                        
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Terapi</th>
                                <th>Jam Terapi</th>
                                <th>No RM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th class="cari">Tanggal Terapi</th>
                                <th class="cari">Jam Terapi</th>
                                <th class="cari">No RM</th>
                                <th class="cari">Nama</th>
                                <th class="cari">Alamat</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($jadwal as $value)
                                <tr>
                                    <td></td>
                                    <td>{{ Carbon\Carbon::parse($value->TGL_TERAPI)->format('d-m-Y')  }}</td>
                                    <td>{{ Carbon\Carbon::parse($value->JAM_TERAPI)->format('h:i')  }} </td>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->NAMA }}</td>
                                    <td>{{ $value->ALAMAT }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection