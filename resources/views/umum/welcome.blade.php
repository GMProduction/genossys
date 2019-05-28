@extends('umum.master')
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-md genosnav">
    <a href="#home" class="navbar-brand page-scroll">
        Genossys
    </a>

    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i style="color: white" class="fa fa-bars"></i></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarmenu">
        <ul class="navbar navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">Our Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolio">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Ahkir Navbar -->


<!-- Home -->
<section class="home">
    <div class="row">
        <div class="col-md-6">
            <h1 class="heading display-3 ">Segala Kebutuhan <br>IT anda</h1>
            <p class="paragraph">Web Design, Apps, Aplikasi Desktop Semua <br>yang anda butuhkan ada di sini.</p>
            <a href="" class="btn btn-danger btn-lg tombol">Produk Kami</a>
        </div>
    </div>
</section>
<!-- Ahkir Home -->

<!-- Our Services -->
<section class="ourservices">
    
</section>

<!-- Ahkir Our Services -->


<!-- About -->
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>
                    About
                </h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 offset-sm-2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, fuga ipsum. Aspernatur minus, perspiciatis quasi vero asperiores sed doloremque fugit repudiandae fuga suscipit consequuntur, similique, alias pariatur numquam. Repellendus, natus.
                </p>
            </div>

            <div class="col-sm-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eum quae officia voluptate quos harum ducimus non porro est adipisci distinctio, nemo laborum omnis consectetur esse nobis, cupiditate, dolorem reprehenderit.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Ahkir About -->

<!-- PortFolio -->
<section class="portFolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>PortFolio</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/1.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/2.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/3.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/4.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/5.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>

            <div class="col-sm-4">
                <a href="">
                    <img src="{{asset('/assets/gambar/6.jpg')}}" class="img-thumbnail img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Ahkir PortFolio -->

@section('script')
<script src="{{asset('/js/tampilan/genosjs.js')}}"></script>
@endsection

@endsection