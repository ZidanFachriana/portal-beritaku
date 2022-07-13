@extends('layouts.default')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- News Detail Start -->
    
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="{{ $artikels->picture }}" style="object-fit: cover;" height="435" width="700">
                <div class="bg-white border border-top-0 p-4">
                    <div class="mb-3">

                       
                        @foreach ($tags as $item)

                        @if ( $artikels->tags()->find($item->id))
                        <p class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        > {{ $item->nama }}</p>
                            
                        @endif
                        <p class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        ></p>
 
                        @endforeach
                       
                        <a class="text-body" href="">{{ $artikels->created_at->format("d F, Y") }}</a>
                    </div>
                    <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $artikels->judul }}</h1>
                    <p>{!! $artikels->body !!}</p>
                   
                 
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                    <div class="d-flex align-items-center">
                        
                        <span>{{ $artikels->user->name }}</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="ml-3"><i class="far fa-eye mr-2"></i>{{ $artikels->views }}</span>
                    </div>
                </div>
            </div>
            <!-- News Detail End -->

           
        </div>

        <div class="col-lg-4">
            <!-- Popular News Start -->
            <div class="mb-3">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Trending</h4>
                </div>
                @forelse ($trending as $item)
                <div class="bg-white border border-top-0 p-3">
                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                        <img  src="{{ $item->picture }}" alt="" height="110" width="110">
                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                            <div class="mb-2">
                                <small class="text-body">{{ $item->created_at->format("d F, Y") }}</small>
                            </div>
                            <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{ route('artikel.show', $item->slug) }}">{{ $item->judule }}</a>
                        </div>
                    </div>
                </div>
                    
                @empty
                <div class="bg-white border border-top-0 p-3">
                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <small>Kosong</small>
                        </div>
                    </div>
                </div>
                    
                @endforelse
                
            </div>
            <!-- Popular News End -->
     
        </div>
    </div>
</div>

    
@endsection