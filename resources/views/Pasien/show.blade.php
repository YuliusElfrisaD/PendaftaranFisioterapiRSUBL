@extends('layouts.lihat')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Jadwal Fisioterapi
                </div>
                <div class="card-body">
                    <div class="container">
                        <form class="form-inline">
                            <label class="mr-sm-2" for="inlineFormInput">Pilih Tanggal:</label>
                            <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div><br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <tr>
                                <td></td>
                                <td>123456</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>123457</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

