@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('assets_login/images/img-00.jpg');">
            <div class="wrap-login100 p-t-30 p-b-30">


                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="login100-form-avatar">
                            <img src="{{ asset('assets_login/images/avatar-01.jpg') }}" alt="AVATAR">
                        </div>

                        <span class="login100-form-title p-t-20 p-b-45">
						    Sign in
					    </span>

                        @if ($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <div class="text-danger" style="margin-top: -20px">
                                        <strong style="text-align: center">Username atau password anda inputkan salah</strong>
                                    </div>
                                @endforeach
                            </ul><br>
                        @endif
                        {{--Username--}}
                        <div class="wrap-input100 validate-input m-b-10">
                                <input id="username" type="text" class="input100" name="username" placeholder="Username..." data-validate="Username harus diisi..." value="{{ old('username') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-user"></i>
                            </span>
                        </div>

                        {{--Password--}}
                        <div class="wrap-input100 validate-input m-b-10">
                            <input id="password" type="password" class="input100" name="password" placeholder="Password..." data-validate="Username harus diisi..." required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-lock"></i>
                            </span>

                        </div>



                        <div class="container-login100-form-btn p-t-10">
                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>
                        </div>
<!--                        <div class="text-center w-full" style="padding-top: 2em;">
                            <a class="txt1" href="#">
                                Lupa Password?
                            </a>
                        </div>-->
                        <div class="text-center w-full" style="padding-top: .75em;">
                            <a class="txt1" href="{{ route('register') }}">
                                Daftar akun baru
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>

<!--                          <div class="text-center w-full" style="padding-top: .75em;">
                            <a class="txt1" href="{{ route('kuota') }}">
                                Cek Kuota Pasien
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>-->
                        
                    </form>
                </div>
            </div>
        </div>

@endsection

