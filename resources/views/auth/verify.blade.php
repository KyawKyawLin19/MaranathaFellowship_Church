@extends('auth.layouts.admin_layout')

@section('content')

    <div class="form-box" id="login-box">
        <div class="header">{{ __('Verify Your Email Address') }}</div>
            <div class="body bg-gray">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <div>
                {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </div><br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn p-0 m-0 align-baseline" style="background:#3d9970;color:white;">{{ __('click here to request another') }}</button>
                    </form>
            </div>
        </div>            
    </div>

@endsection