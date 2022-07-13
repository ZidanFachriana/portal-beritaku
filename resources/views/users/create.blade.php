<x-app-layout>
    <x-slot name="title">
       Tambah Penulis Baru
    </x-slot>
 
    <h1>Tambah Penulis</h1>
    
    <form action="{{ route('users.create') }}" method="post">
       @csrf
       @include('users._form-control', [
          'submit' => 'Tambah'
       ]);
    </form>
 
 
    
 </x-app-layout>
 