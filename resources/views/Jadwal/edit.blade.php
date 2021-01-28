@extends('layouts.isi')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-edit"></i> Ubah Jadwal
            </div>
            <div class="card-body mx-auto mt-5">
                <form action="{{ route('jadwal.update', $jadwal->no) }}"  method="POST">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group {{ $errors->has('NO_RM') ? 'has-error' : '' }}">
                        <label class="mr-sm-2" for="inlineFormInput">No RM</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="id" value="{{ $jadwal->id }}" data-toggle="tooltip" title="No. RM" data-placement="right"  required readonly>

                        @if ($errors->has('NO_RM'))
                        <span class="help-block">{{ $errors->first('NO_RM') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('NAMA') ? 'has-error' : '' }}">
                        <label for="nama">Nama</label>
                        <input class="form-control" id="nama" type="text" name="NAMA" value="{{ $jadwal->NAMA }}" data-toggle="tooltip" title="Nama" data-placement="right"required>
                        <div class="invalid-feedback">Harap masukan nama</div>
                        @if ($errors->has('NAMA'))
                        <span class="help-block">{{ $errors->first('NAMA') }}</span>
                        @endif
                    </div>
                    <div style="display: none" class="form-group {{ $errors->has('TGL_TERAPI') ? 'has-error' : '' }}">
                        <label for="tanggalLahir">Tanggal Terapi</label>
                        <input class="form-control" id="tanggalLahir" type="date" name="TGL_TERAPI2" value="{{ $jadwal->TGL_TERAPI }}" data-toggle="tooltip" title="Tanggal Terapi" data-placement="right" 
                               data-date readonly required>
                        <div class="invalid-feedback">Harap masukan tanggal terapi</div>
                        @if ($errors->has('TGL_TERAPI'))
                        <span class="help-block">{{ $errors->first('TGL_TERAPI') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('TGL_TERAPI') ? 'has-error' : '' }}">
                        <label for="tanggalLahir">Tanggal Terapi</label>
                        <input class="form-control" id="tanggalLahir" type="date" name="TGL_TERAPI" value="{{ $jadwal->TGL_TERAPI }}" data-toggle="tooltip" title="Tanggal Terapi" data-placement="right" 
                               data-date required>
                        <div class="invalid-feedback">Harap masukan tanggal terapi</div>
                        @if ($errors->has('TGL_TERAPI'))
                        <span class="help-block">{{ $errors->first('TGL_TERAPI') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('JAM_TERAPI') ? 'has-error' : '' }}">
                        <label for="tanggalLahir">Jam Terapi</label>
                        <input class="form-control {{ $errors->has('JAM_TERAPI') ? ' is-invalid' : '' }}" id="tanggalLahir" value="{{ Carbon\Carbon::parse($jadwal->JAM_TERAPI)->format('H:i')  }}" type="text" placeholder="Masukan Jam Terapi" name="JAM_TERAPI" data-toggle="tooltip" title="Jam Terapi" data-placement="right" 
                               list="browsers" required>
                        <!--<input type="text" list="browsers" />-->

                        <datalist size="5" id="browsers">
                            <option value="07:00">
                            <option value="07:50">
                            <option value="08:40">
                            <option value="09:30">
                            <option value="10:20">
                            <option value="11:10">
                            <option value="12:30">
                            <option value="13:20">
                            <option value="14:10">
                            <option value="15:00">
                            <option value="15:50">
                            <option value="16:40">
                            <option value="17:30">
                            <option value="18:50">
                            <option value="19:40">
                        </datalist>
                        <div class="invalid-feedback">Harap masukan jam terapi</div>
                        @if ($errors->has('JAM_TERAPI'))
                        <span class="help-block">{{ $errors->first('JAM_TERAPI') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection