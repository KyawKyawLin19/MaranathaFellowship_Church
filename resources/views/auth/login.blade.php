@extends('auth.layouts.admin_layout')
@section('content')
    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="body bg-gray">
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Name" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                        
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                </div>          
                <div class="form-group">
                    <input type="checkbox" name="remember_me"/> Remember me
                </div>
            </div>
            <div class="footer">                                                               
                <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                
                <p><a href="{{ route('password.request') }}">I forgot my password</a></p>  
                
                <a href="register" class="text-center">Register a new membership</a>
            </div>
        </form>
    </div>
@endsection
