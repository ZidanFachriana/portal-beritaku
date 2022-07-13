<br>
<div class="col-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Nama</h5>
        </div>
        <div class="card-body col-12 col-lg-8">
            <input type="text" class="form-control"  name="nama" required placeholder="Masukkan nama" value="{{ old('nama') ?? $tag->nama }}">
            @error('nama')
            <span class="mt-2 text-danger">Nama harus diisi</span>
                
            @enderror
        </div>
        <div class="card-header">
            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</div>


