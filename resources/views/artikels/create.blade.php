<x-app-layout>
    <x-slot name="title">
      Post artikel
    </x-slot>
 
    <h1>Post Artikel</h1>
    
    <form action="{{ route('artikels.create') }}" method="post" enctype="multipart/form-data" >
       @csrf
       @include('artikels._form-control', [
          'submit' => 'Tambah'
       ]);
    </form>
 
 
    
 </x-app-layout>
 