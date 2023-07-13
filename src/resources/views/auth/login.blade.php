@extends('layouts.app')

@section('content')
<div class="container lgn-mgn ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bor ">
                <div class="card-header fs-3 bg-white text-center txt-color fw-bold bor2 ltr-spng">{{ __('USER LOGIN') }}</div>

                <div class="card-body mgn-card">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><i class="bi bi-person-circle mx-3 fs-4"></i></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email" type="email" class=" ppn-fnt bor form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><i class="bi bi-key mx-3 fs-4 fw-bold"></i></label>

                            <div class="col-md-6 ">
                                <input id="password" placeholder="Password" type="password" class=" ppn-fnt bor form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link fg-m" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                            @endif
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn loginbutton col-md-9 ">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="offset-md-4 my-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 text-center">
                                            <p class="d-inline-block my-1 ">Don't have an account?</p>
                                            <a class="nav-link d-inline-block aq-clr fw-bold" href="{{ route('register') }}">
                                               {{ __('Sign Up') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
