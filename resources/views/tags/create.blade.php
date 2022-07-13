<x-app-layout>
    <x-slot name="title">
       Tambah tag
    </x-slot>
 
    <h1>Tambah tag</h1>
    
    <form action="{{ route('tags.create') }}" method="post" >
       @csrf
       @include('tags._form-control', [
          'submit' => 'Tambah'
       ]);
    </form>
 
 
    
 </x-app-layout>
 