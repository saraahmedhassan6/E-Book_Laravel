@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border-radius:20px;border:none;box-shadow: 0 5px 6px rgba(0, 0, 0, 0.2);margin-top:0px;margin-left:30px;width:450px;">
                <div class="card-body">
                    <h1 style="font-weight:900;font-size:30px;color:#012a4a">Welcome</h1>
                    <p style="color:#6c757d">Please Fill the form to Sign up</p>
                        
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <table style="width:400px">
                                <tr>
                                    <td style="text-align: left;">
                                        <label for="name">{{ __('Name') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:5px;height:40px" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td style="text-align: left;">
                                        <label for="email" >{{ __('Email Address') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:5px;height:40px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td style="text-align: left;">
                                        <label for="password" >{{ __('Password') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:5px;height:40px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:5px;height:40px" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="phone" >{{ __('Phone') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:5px;height:40px" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="address" >{{ __('Address') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style="margin-bottom:15px;height:40px" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary" style="background-color:#124559;border:1px solid #124559;width:350px;height:40px;margin-bottom:10px;">
                                            {{ __('Register') }}
                                        </button>
                                    </td>
                                </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
