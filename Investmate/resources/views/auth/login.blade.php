@extends('layouts.app')

@section('illustration')
    <img src="{{ asset('css/images/loginImg.png') }}" alt="Login Illustration" class="login-illustration">
@endsection

@section('content')
<div class="text-center mb-4">
    <h3 class="fw-bold mb-3">Login</h3>
</div>

<!-- Social Login Buttons -->
<div class="d-flex gap-3 mb-4">
    <button type="button" class="btn btn-outline-dark w-50 d-flex align-items-center justify-content-center">
        <i class="bi bi-google me-2"></i> Sign in with Google
    </button>
    <button type="button" class="btn btn-outline-dark w-50 d-flex align-items-center justify-content-center">
        <i class="bi bi-apple me-2"></i> Sign in with Apple
    </button>
</div>

<!-- Divider -->
<div class="d-flex align-items-center mb-3">
    <hr class="flex-grow-1">
    <span class="px-2 text-muted">or</span>
    <hr class="flex-grow-1">
</div>

<!-- Login Form -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3 text-start">
        <label for="email" class="form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" 
               class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 text-start">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" 
               class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>

        @if (Route::has('password.request'))
            <a class="text-decoration-none" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success py-2" style="background-color:#29926F; border:none;">
            {{ __('Login') }}
        </button>
    </div>

    <div class="text-center mt-3">
        <p class="mb-0 text-muted">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-success fw-semibold text-decoration-none">
                {{ __('Sign up') }}
            </a>
        </p>
    </div>
</form>
@endsection
