@extends('auth.layouts.admin_layout')

@section('content')
    <div class="form-box" id="login-box">
        <div class="header">{{ __('Reset Password') }}</div>
            <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="body bg-gray">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group row">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email address" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">{{ __('Send Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
