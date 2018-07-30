

@extends('layouts.isi')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Jadwal Fisioterapi
                </div>
                <div class="card-body">

                    <form class="form-inline">
                        <label class="mr-sm-1" for="inlineFormInput">Pilih Tanggal:</label>
                        <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th class="cariKolom">Tanggal Terapi</th>
                                <th class="cariKolom">Jam Terapi</th>
                                <th class="cariKolom">No RM</th>
                                <th class="cariKolom">Nama</th>
                                <th class="cariKolom">Alamat</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($jadwal as $value)
                                <tr>
                                    <td></td>
                                    <td>{{ $value->TGL_TERAPI }}</td>
                                    <td>{{ $value->JAM_TERAPI }}</td>
                                    <td><a href="{{ route('jadwal.show', $value->id) }}">{{ $value->id }}</a></td>
                                    <td>{{ $value->NAMA }}</td>
                                    <td>{{ $value->ALAMAT }}</td>
                                    <td><center>
                                            <form action="{{ route('jadwal.destroy', $value->id) }}" method="POST">
                                                {{csrf_field()}}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ route('jadwal.edit', $value->id) }}" class="btn btn-xs btn-primary" ><i class="fa fa-edit" data-toggle="tooltip" title="Edit Data"></i></a>
                                                <button type="submit" class="btn btn-xs btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Delete Data"></i></button>
                                            </form>

                                        </center></td>
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

