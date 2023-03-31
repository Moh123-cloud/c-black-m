<div style="display:flex; justify-content:center; align-items:center; height:100vh; background-color:#f4f4f4;">
  <div style="background-color:#fff; padding:2rem; border-radius:0.25rem; width:25rem;">
    <div style="margin-bottom: 1rem; font-size: 1.1rem; color: #718096;">
      <h3>Verify your email address by clicking on the link we just emailed to you.</h3>
    </div>                                                                                                                       
    @if (session('status') == 'verification-link-sent')
    <div style="margin-bottom: 1rem; font-weight: 500; font-size: 0.875rem; color: #48bb78;">
        <h3>A new verification link has been sent to the email address.</h3>
    </div><br>
    @endif
    <div style="margin-top: 1rem; display: flex; align-items: center; justify-content: space-between;">
      <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div>
          <button style="background-color: #4299e1; color: #fff; border: none; border-radius: 0.25rem; padding: 0.5rem 1rem; font-size: 1.1rem; line-height: 1.5; cursor: pointer;" type="submit">
              {{ __('Resend Verification Email') }}
          </button>
        </div><br>
      </form>
      <div>  
        <form method="POST" action="{{ route('logout') }}" class="inline">
          @csrf
          <button style="text-decoration: underline; font-size: 0.875rem; color: #718096; cursor: pointer; border: none; background: none; padding: 0; margin-left: 0.5rem;" type="submit">
              {{ __('Log Out') }}
          </button> <br>
        </form>
      </div>
    </div>
  </div>
</div>
