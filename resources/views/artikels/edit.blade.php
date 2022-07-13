<x-app-layout>
    <x-slot name="title">
      Edit Artikel : {{ $artikel->judul }}
    </x-slot>
 
    <h1>Edit Artikel : {{ $artikel->judul }}</h1>
    
    <form action="{{ route('artikels.edit', $artikel->slug) }}" method="post" enctype="multipart/form-data" >
       @csrf
       @method('put')
       <div class="card-header">
         <h5 class="card-title mb-0">Gambar Artikel Sekarang</h5>
         <img src="{{ $artikel->picture }}" alt="" width="180" height="180" class="mt-2">
     </div>
       @include('artikels._form-control', [
          'submit' => 'Update'
       ]);
    </form>
 
 
    
 </x-app-layout>
 