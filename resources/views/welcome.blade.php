@extends('layouts.main')

@section('content')
    <!-- Banner Section -->
    <div class="banner">
        <div class="container-fluid">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row">
                            <div class="col col-md-6 col-lg-6 col-sm-6">
                                <div class="carousel-caption">
                                    <h3>Get Your's Now</h3>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="col col-md-6 col-lg-6 col-sm-6">
                                <img src="assets/images/banner/b-10.jpg" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row">
                            <div class="col">
                                <div class="carousel-caption">
                                    <h3>Get Your's Now</h3>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/banner/b-11.jpg" class="d-block big" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="carousel-caption">
                                    <h3>Get Your's Now</h3>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/banner/b-17.jpg" class="d-block big" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- End of banner Section -->

    <!-- About Section -->
    <div class="about_us">
        <h2 class="header">ABOUT US</h2>
        <div class="aboutContent">
            <p>We specialize in producing high-quality African adult content that showcases
                the beauty and sensuality of African teens. Our team of experienced professionals
                is dedicated to creating authentic, compelling and thought-provoking young adult
                storylines, dynamic characters, and breathtaking visuals that transport viewers '
                into a world of imagination and adventure.
            </p>
        </div>
    </div>

    <div class="external-link">
        <div class="circle">
            <a href="#">X</a>
        </div>
        <div class="circle">
            <a class="s" href="#">S</a>
        </div>
        <div class="circle">
            <a class="f" href="#">F</a>
        </div>
        <div class="circle">
            <a class="xh" href="#">XH</a>
        </div>
        <div class="circle">
            <a href="#">P</a>
        </div>
        <div class="circle">
            <a href="#">O</a>
        </div>
    </div>

    <div class="container">
        <div class="internal">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="{{ route('free_videos') }}">
                        <img src="assets/images/extra/free.jpg" alt="free videos">
                        <div class="image-text">Free Videos</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4">
                    <div class="background"></div>
                    <a href="{{ route('premium_videos') }}">
                        <img src="assets/images/extra/paid.jpg" alt="paid videos">
                        <div class="image-text">Paid Videos</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="#">
                        <img src="assets/images/extra/podcast.jpg" alt="podcast">
                        <div class="image-text">18+ Podcast</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="#">
                        <img src="assets/images/extra/conffessions.jpg" alt="conffessions">
                        <div class="image-text">18+ Conffessions</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="{{ url('meetme') }}">
                        <img src="assets/images/extra/hookup.jpg" alt="hookup">
                        <div class="image-text">Hookup</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="{{ url('meetme') }}">
                        <img src="assets/images/extra/meetme.jpg" alt="meetme">
                        <div class="image-text">Meetme</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="#">
                        <img src="assets/images/extra/free.jpg" alt="free videos">
                        <div class="image-text">Shop</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-6 col-sm-6 mt-4">
                    <div class="background"></div>
                    <a href="#">
                        <img src="assets/images/extra/free.jpg" alt="free videos">
                        <div class="image-text">Others</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
 @endsection
