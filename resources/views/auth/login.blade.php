@extends('layouts.auth')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-container">
                <div class="login-header mb-3">
                    <h3>
                        <img src="{{ asset('images/logo/Slitwork.png') }}" width="50" alt="Slitwork Logo">
                        Slitwork Login
                    </h3>
                    <p class="login-header-title">Welcome back to Slit Work</p>
                    <p class="text-muted">Login with your registered email & password.</p>
                </div>
                
                <div class="login-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Email Input -->
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="email-addon"><i class="fas fa-user"></i></span>
                                </div>
                                <input 
                                    id="email" 
                                    type="email" 
                                    placeholder="E-mail address" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email" 
                                    autofocus
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                                </div>
                                <input 
                                    id="password" 
                                    type="password" 
                                    placeholder="Password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    required
                                    autocomplete="current-password"
                                >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group mb-2">
                            <div class="form-check pl-0">
                                <input type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="rememberMe" class="form-check-label">Remember me</label>
                            </div>
                        </div>

                        <!-- Forgot Password Route -->
                        @if (Route::has('password.request'))
                            <div class="form-group mb-3">
                                <a href="{{ route('password.request') }}" class="secondary-link">Forgot password?</a>
                            </div>
                        @endif

                        <button type="submit" class="btn primary-btn btn-block">Login</button>
                    </form>

                    <!-- Registration Route -->
                    <div class="my-3">
                        <p>Don't have an account? <a href="{{ route('register') }}">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Poster Section -->
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-poster">
                <h2 class="mb-3 slogan">Mark yourself as <br>Actively Job seeker</h2>
                <p class="text-white lead">We have enabled this feature targeting superheroes who lost their jobs during this crisis.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
.login-poster {
    background-image: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.35)
    ),
    url('{{ asset("images/login-bg.jpg") }}');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
@endpush