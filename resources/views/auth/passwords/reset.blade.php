@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="max-width: 400px; border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
        <div style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px;">{{ __('Reset Password') }}</div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div style="margin-bottom: 10px;">
                <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">{{ __('Email Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-bottom: 10px;">
                <label for="password" style="display: block; font-weight: bold; margin-bottom: 5px;">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-bottom: 10px;">
                <label for="password-confirm" style="display: block; font-weight: bold; margin-bottom: 5px;">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div style="margin-top: 10px;">
                <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 8px 16px; border-radius: 3px; cursor: pointer;">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection
