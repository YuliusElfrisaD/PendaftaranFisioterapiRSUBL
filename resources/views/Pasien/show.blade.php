@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-drivers-license-o"></i> Data Pasien
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
            <div class="card-body"><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No RM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>No Telepon</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th class="cariData">No RM</th>
                                <th class="cariData">Nama</th>
                                <th class="cariData">Jenis Kelamin</th>
                                <th class="cariData">Alamat</th>
                                <th class="cariData">Tanggal Lahir</th>
                                <th class="cariData">Umur</th>
                                <th class="cariData">No Telepon</th>
                                <th>Edit</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dataPasien as $value)
                            <tr>
                                <td></td>
                                <td>{{$value-> id}}</td>
                                <td>{{$value-> NAMA}}</td>
                                <td>{{$value-> JENIS_KELAMIN}}</td>
                                <td>{{$value-> ALAMAT}}</td>
                                <td>{{ Carbon\Carbon::parse($value->TGL_LAHIR)->format('d-m-Y') }}</td>
                                <td>{{$value-> UMUR}}</td>
                                <td>{{$value-> NO_TELP}}</td>
                                <td>
                            <center>
                           
                                <a href="{{ route('pasien.edit', $value->id) }}" class="btn btn-xs btn-primary" ><i class="fa fa-edit" data-toggle="tooltip" title="Edit Data"></i></a>
                                
                            </center>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

