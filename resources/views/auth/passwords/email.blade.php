@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border-radius:20px;border:none;box-shadow: 0 5px 6px rgba(0, 0, 0, 0.2);margin-top:80px;margin-left:30px;width:400px;">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 style="font-weight:900;font-size:30px;color:#012a4a">Forgot Your Password?</h1>
                        <p style="color:#6c757d">PLease confirm your email address below and we will send you verfication code</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <table style="width:300px">
                            <tr>
                                <td style="text-align: left;">
                                    <label for="email">{{ __('Email') }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <input style="margin-bottom:40px;height:50px" id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                </td>
                            </tr>

                            <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary" style="background-color:#124559;border:1px solid #124559;width:350px;height:40px;margin-bottom:50px;">
                                            {{ __('Send') }}
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
