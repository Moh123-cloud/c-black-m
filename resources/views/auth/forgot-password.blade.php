@if (session('status'))
    <div style="margin-bottom: 20px; font-size: 14px; font-weight: bold; color: #0f0; text-align:center">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div style="margin-bottom: 20px;">
        <label for="email" style="display:block; margin-bottom:5px">{{ __('Email') }}</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" style="padding: 5px; border-radius: 3px; border: 1px solid #ccc; width: 100%;" :value="old('email')" required autofocus />
    </div>

    <div style="text-align: right;">
        <button style="background-color: #ccc; color: #fff; padding: 10px 20px; border:none; border-radius: 5px;">{{ __('Reset password') }}</button>
    </div>
</form>

