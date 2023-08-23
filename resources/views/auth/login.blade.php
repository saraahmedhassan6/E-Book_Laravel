@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6">
        <div class="card" style="border-radius:20px;border:none;box-shadow: 0 5px 6px rgba(0, 0, 0, 0.2);margin-top:80px;margin-left:30px;width:400px;">
                <div class="card-body">
                    <h1 style="font-weight:900;font-size:30px;color:#012a4a">Welcome Back</h1>
                    <p style="color:#6c757d">Enter your email and password to sign in</p>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <table style="width:300px">
                                <tr>
                                    <td style="text-align: left;">
                                        <label for="email">{{ __('Email') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <input style="margin-bottom:10px;height:50px" id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </td>
                                    
                                </tr>
                                

                                <tr>
                                    <td style="text-align: left;">
                                        <label for="password">{{ __('Password') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:20px;height:50px" id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label style="position: relative; left: 210px;" class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                        <input style="position: relative; left: 220px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    
                                    </td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>
                                        
                                        @if (Route::has('password.request'))
                                            <a style="position: relative; left: 190px;margin-bottom:10px" class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot my Password') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary" style="background-color:#124559;border:1px solid #124559;width:350px;height:40px;margin-bottom:70px;">
                                            {{ __('Sign in') }}
                                        </button>
                                        
                                    </td>
                                </tr>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
