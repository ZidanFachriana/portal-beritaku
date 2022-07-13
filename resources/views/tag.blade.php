@extends('layouts.default')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h4 class="m-0 text-uppercase font-weight-bold">{{ $tag->nama }}</h4>
                    </div>
                </div>
                @forelse ($artikels as $item)

                <div class="col-lg-6">
                    <div class="position-relative mb-3">
                        <a href="{{ route('artikel.show', $item->slug) }}">
                        <img class="w-100" src="{{ $item->picture }}" height="400" width="400">
                    </a>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-2">
                                @foreach ($item->tags as $tag)

                                <p class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2">{{ $tag->nama }}</p>
    
                                    @endforeach

                                <a class="text-body" href="{{ route('artikel.show', $item->slug) }}"><small>{{ $item->created_at->format("d F, Y") }}</small></a>
                            </div>
                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{ route('artikel.show', $item->slug) }}">{{ $item->judule }}</a>
                            <p class="m-0 fst-normal">{!! $item->bodyne !!}</p>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                         
                            
                            <div class="d-flex align-items-center">
                                <small>{{ $item->user->name }}</small>
                            </div>
                          
                            <div class="d-flex align-items-center">
                                <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $item->views }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-6">
                    <div class="position-relative mb-3">
                      <h1>Ups Artikel Kosong</h1>
                    </div>
                </div>
                @endforelse
            </div>
            {{ $artikels->links('vendor.pagination.simple-default') }}

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