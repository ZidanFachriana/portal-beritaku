<x-app-layout>
    <x-slot name="title">
       Dashboard
    </x-slot>


    <div class="row">
        @can('administrator')
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">All User/Penulis</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle me-2" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $user }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">All Post/Article</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle me-2" data-feather="book-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $artikel }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan
        <div class="col-12 col-lg-6 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header my-0">
                    <h2>Kelompok UAS PAW</h2>
                </div>
               
            </div>
        </div>
      
    </div>
</x-app-layout>
