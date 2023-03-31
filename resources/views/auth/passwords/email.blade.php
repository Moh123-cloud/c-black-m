@extends('layouts.app')

@section('content')
<div style="display:flex; justify-content:center; align-items: center; height: 100vh;">
    <div style="border: 1px solid black; padding: 10px; width: 50%;">
        <div style="text-align:center;">
            <div style="font-weight:bold; font-size:18px; margin-bottom: 10px;">{{ __('Reset Password') }}</div>

            @if (session('status'))
                <div style="background-color:lightgreen; padding: 10px; margin-bottom: 10px;">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div style="margin-bottom: 10px;">
                    <label for="email" style="display:inline-block; width: 35%; text-align:right; margin-right: 5%;">{{ __('Email Address') }}</label>
                    <input id="email" type="email" style="display:inline-block; width: 60%; padding: 5px; box-sizing: border-box;" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <div style="color:red; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">{{ __('Send Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
