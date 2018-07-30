@extends('layouts.isi')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-info-circle"></i> Profil
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                @if ($message = Session::get('message'))
                                    <div class="alert alert-success martop-sm">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <form action="{{ route('profileEdit.update', Auth::user()->id) }}"  method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('PUT') }}
                                    <h4>Informasi Profil</h4></br>
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ Auth::user()->name }}" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                        <label for="exampleInputEmail1">Usename</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="{{ Auth::user()->username }}" required>
                                        @if ($errors->has('username'))
                                            <span class="help-block">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ Auth::user()->email }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah Profil</button>
                                </form>
                            </div>
                            <div class="col">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('changePassword') }}">
                                    {{ csrf_field() }}
                                    <h4>Ubah Password</h4></br>
                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="current-password">Password Lama</label>
                                        <input type="password" class="form-control" id="current-password" name="current-password" required>
                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password">Password Baru</label>
                                        <input type="password" class="form-control" id="new-password" name="new-password" required>
                                        @if ($errors->has('new-password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Re-Password Baru</label>
                                        <input type="password" class="form-control" id="new-password_confirmation" name="new-password_confirmation" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

