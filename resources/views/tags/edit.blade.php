<x-app-layout>
    <x-slot name="title">
      Edit tag
    </x-slot>
 
    <h1>Edit tag : {{ $tag->nama }}</h1>
    
    <form action="{{ route('tags.edit', $tag->nama) }}" method="post">
       @csrf
       @method('put')
       @include('tags._form-control', [
          'submit' => 'Update'
       ]);
    </form>
 
 
    
 </x-app-layout>
 