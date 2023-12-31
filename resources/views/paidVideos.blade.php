@extends('layouts.main')

@section('content')
<div class="headerCaption">
    <h3 style="    text-align: center; color: white; text-transform: uppercase;"> Premium Videos </h3>
</div>

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

    <!-- Video session -->

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-6 col-sm-6">
            <div class="free_videos">
                <div class="row">
                    @foreach ($video as $item)
                    <div class="col">
                        <video controls src="{{ ('upload/' . $item->file) }}">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col content">
                        <h3>{{$item->title}}</h3><br>
                        <p>{{$item->description}}</p>
                        <a href="#" class="btn btn-primary">Tip me</a>
                        <a href="{{ url('premium_videos') }}" class="btn btn-primary">Get full video</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
