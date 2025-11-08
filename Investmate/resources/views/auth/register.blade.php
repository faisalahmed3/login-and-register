@extends('layouts.app')

@section('illustration')
    <div class="illustration-wrapper">
        <img src="{{ asset('css/images/registerIcon.png') }}"
             alt="Register Illustration"
             class="register-illustration">
    </div>
@endsection

@section('content')
<div class="register-container">
    <h3 class="text-center mb-4 fw-semibold">Register with</h3>

    <!-- Social Buttons -->
    <div class="d-flex justify-content-center gap-3 mb-4">
        <button class="btn btn-outline-dark w-100">
            <i class="bi bi-google me-2"></i> Sign Up With Google
        </button>
        <button class="btn btn-outline-dark w-100">
            <i class="bi bi-apple me-2"></i> Sign Up With Apple ID
        </button>
    </div>

    <!-- Divider -->
    <div class="d-flex align-items-center mb-4">
        <hr class="flex-grow-1">
        <span class="mx-2 text-muted">or</span>
        <hr class="flex-grow-1">
    </div>

    <!-- Registration Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                       placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                @error('first_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                       placeholder="Last Name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                       placeholder="Phone Number" value="{{ old('phone') }}" required>
                @error('phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <input type="password" name="password_confirmation" class="form-control"
                       placeholder="Confirm Password" required>
            </div>
        </div>

        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="newsletter">
            <label class="form-check-label small text-muted" for="newsletter">
                Yes, I want to receive InvestMate emails
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="terms" required>
            <label class="form-check-label small text-muted" for="terms">
                I agree to all the <a href="#" class="text-decoration-none">Terms, privacy policy and fees</a>
            </label>
        </div>

        <button type="submit" class="btn btn-success w-100 py-2 fw-semibold" style="background-color:#29926F;">
            Create Account
        </button>

        <p class="text-center mt-3 small text-muted">
            Already have an account?
            <a href="{{ route('login') }}" class="text-success text-decoration-none fw-semibold">Log In</a>
        </p>
    </form>
</div>
@endsection
