<x-layouts.guest title="Register">
<form method="POST" action="/register">
    @csrf
    <div class="card card-success">
        <div class="card-header text-center"><h4>Register</h4></div>
        <div class="card-body">
            <div class="form-group"><label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group"><label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group"><label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group"><label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button class="btn btn-success btn-block">Daftar</button>
        </div>
    </div>
</form>
</x-layouts.guest>
