
@extends('auth.layouts.admin_layout')
@section('content')
    <div class="form-box" id="login-box">
        <div class="header">Register New Membership</div>
        <form method="POST" action="{{ route('register') }}">
                    @csrf
            <div class="body bg-gray">
                <div class="form-group">
                    
                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full name"autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" name="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                </div>
            </div>
            <div class="footer">                    

                <button type="submit" class="btn bg-olive btn-block">Sign me up</button>

                <a href="/login" class="text-center">I already have a membership</a>
            </div>
        </form>
    </div>
@endsection
