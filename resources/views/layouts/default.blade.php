<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PawPaw</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Paw<span class="text-white font-weight-normal">Kel 2</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a> 
                </div>
                @foreach ($tags as $item)
                <div class="navbar-nav py-0">
                    <a href="{{ route('single.tag', $item->slug) }}" class="nav-item nav-link">{{ $item->nama }}</a> 
                </div>
                @endforeach
                <form class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;" method="get" action="{{ route('single.search') }}">
                    @csrf
                    <input type="text" class="form-control border-0" placeholder="Judul" name="cari">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

<!-- News With Sidebar Start -->
    <div class="container-fluid mt-5">
        @yield('content')
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">UAS PAW KEL 2</h5>
              
            </div>
            
        </div>
    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>