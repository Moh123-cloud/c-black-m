@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="background-color: #f5f5f5; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="col-md-8">
            <div class="card" style="width: 55vw; background-color: white; border-radius: 10px; padding: 30px;">
                <div class="card-header" style="text-align: center; font-size: 24px; font-weight: bold;">{{ __('Login') }}</div><br>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> <br>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="margin: 5px">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="margin: 5px"                  >
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        @endif

                                        <br><a href="{{ Route('register') }}"><h5>Not Registered?</h5></a>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
