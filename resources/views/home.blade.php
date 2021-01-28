@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Jadwal Fisioterapi
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
            <div class="card-body">
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
                                <th class="cari">Tanggal Terapi</th>
                                <th class="cari">Jam Terapi</th>
                                <th class="cari">No RM</th>
                                <th class="cari">Nama</th>
                                <th class="cari">Alamat</th>
                                <th>Edit/Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($jadwal as $value)
                            <tr>
                                <td></td>
                                <td>{{ Carbon\Carbon::parse($value->TGL_TERAPI)->format('d-m-Y')  }}</td>
                                <td>{{ Carbon\Carbon::parse($value->JAM_TERAPI)->format('H:i')  }}</td>
                                <td><a href="{{ route('jadwal.show', $value->id) }}">{{ $value->id }}</a></td>
                                <td>{{ $value->NAMA }}</td>
                                <td>{{ $value->ALAMAT }}</td>
                                <td>
                            <center>
                                <form action="{{ route('jadwal.destroy', $value->no) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('jadwal.edit', $value->no) }}" class="btn btn-xs btn-primary" ><i class="fa fa-edit" data-toggle="tooltip" title="Edit Data"></i></a>
                                <button type="submit" class="btn btn-xs btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Delete Data"></i></button>
                            </form>
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

