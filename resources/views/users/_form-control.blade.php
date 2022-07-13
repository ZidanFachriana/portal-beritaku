<br>
<div class="col-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Nama</h5>
        </div>
        <div class="card-body col-12 col-lg-8">
            <input type="text" class="form-control"  name="name" required placeholder="Masukkan nama" value="{{ old('name') }}">
            @error('name')
            <span class="mt-2 text-danger">{{ $message }}</span>
                
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">Email</h5>
        </div>
        <div class="card-body col-12 col-lg-8">
            <input type="email" class="form-control"  name="email" required placeholder="Masukkan email" value="{{ old('email') }}">
            @error('email')
            <span class="mt-2 text-danger">{{ $message }}</span>
                
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">Password</h5>
        </div>
        <div class="card-body col-12 col-lg-8">
            <input type="password" class="form-control"  name="password" required placeholder="Masukkan password" value="{{ old('passoword') }}">
            @error('password')
            <span class="mt-2 text-danger">{{ $message }}</span>
                
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">konfirmasi password</h5>
        </div>
        <div class="card-body col-12 col-lg-8">
            <input type="password" class="form-control"  name="password_confirmation" required placeholder="Masukkan password sekali lagi" value="{{ old('passoword') }}">
            @error('password_confirmation')
            <span class="mt-2 text-danger">{{ $message }}</span>
                
            @enderror
        </div>
     
     
        <div class="card-header">
            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</div>


