<br>
<div class="col-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Judul</h5>
        </div>
        <div class="card-body col-12 col-lg-12">
            <input type="text" class="form-control"  name="judul" required placeholder="Masukkan judul" value="{{ old('judul') ?? $artikel->judul }}">
            @error('judul')
            <span class="mt-2 text-danger">Judul harap diisi</span>
                
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">Gambar Artikel</h5>
        </div>
        <div class="card-body col-12 col-lg-12">
            <input type="file" class="form-control"  name="gambar_artikel" placeholder="Masukkan gambar">
            @error('gambar_artikel')
            <span class="mt-2 text-danger">{{ $message }}</span>
                
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">Body Artikel</h5>
        </div>
        <div class="card-body col-12 col-lg-12">
            <textarea name="body" class="form-control" id="paw" >{{ old('body') ?? $artikel->body }}</textarea>
            @error('body')
            <span class="mt-2 text-danger">Body harap diisi</span>
            ags/artikel/table
            @enderror
        </div>
        <div class="card-header">
            <h5 class="card-title mb-0">Tag</h5>
        </div>
        <div class="card-body col-12 col-lg-12">
            <select name="tags" class="form-control">
                @foreach ($tags as $item)
                <option value="{{ $item->id }}" {{ $artikel->tags()->find($item->id) ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="card-header">
            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</div>



