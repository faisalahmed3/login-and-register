@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Dashboard') }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm" 
                                style="background-color:#29926F; border:none;">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="mb-3">{{ __('You are logged in!') }}</h5>
                    <p class="text-muted mb-0">Welcome back, <strong>{{ Auth::user()->first_name }}</strong> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
