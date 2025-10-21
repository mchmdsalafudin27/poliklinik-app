<x-layouts.guest title="Login">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Poliklinik</b>App</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan masuk untuk melanjutkan</p>

      @if ($errors->any())
        <div class="alert alert-danger">
          {{ $errors->first() }}
        </div>
      @endif

      <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <p class="text-center mt-3">
    Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
</p>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</x-layouts.guest>
