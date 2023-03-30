@extends('layouts.app')

@section('content')
<div style="display:flex; justify-content:center; align-items:center; height:200vh; background-color:#f4f4f4;">
  <div style="background-color:#fff; padding:2rem; border-radius:0.25rem; width:25rem;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div> <br>
                    @endif

                    {{ __('Check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <br><button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>. <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
