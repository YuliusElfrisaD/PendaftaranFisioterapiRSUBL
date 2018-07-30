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

                        <form class="form-inline" style="padding-left: .75em;">
                            <label class="mr-sm-2" for="inlineFormInput">Pilih Tanggal:</label>
                            <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No RM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Terapi</th>
                                <th>Jam Terapi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No RM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Terapi</th>
                                <th>Jam Terapi</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($jadwal as $value)
                                <tr>
                                    <td></td>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->NAMA }}</td>
                                    <td>{{ $value->ALAMAT }}</td>
                                    <td>{{ $value->TGL_TERAPI }}</td>
                                    <td>{{ $value->JAM_TERAPI }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection