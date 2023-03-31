<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div style="border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
    <h1 style="text-align: center;"> Password</h1>
    <form method="POST" action="{{ route('password.update') }}" style="margin-top: 20px;">
      @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">
      <div>
        <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-top: 10px;">
        <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-top: 10px;">
        <label for="password_confirmation" style="display: block; margin-bottom: 5px;">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
      </div>
      <div style="margin-top: 20px; display: flex; justify-content: flex-end;">
        <button type="submit" style="padding: 8px 16px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Reset Password</button>
      </div>
    </form>
  </div>
</div>
