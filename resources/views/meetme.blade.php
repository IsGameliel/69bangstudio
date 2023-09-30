@extends('layouts.main')

@section('content')

<div class="container">
    <div id="carouselExampleDark" class="carousel carouselDark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/images/meetme/1.jpg" class="d-block w-100 meetmeImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/meetme/2.jpg" class="d-block w-100 meetmeImg" alt="...">
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

    <!-- About Section -->
    <div class="meetme_content">
        <div class="meetContent">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut consequatur
                debitis mollitia recusandae excepturi nulla aliquam ea adipisci ipsum,
            </p>
            <a href="#" class="btn btn-primary">Book now</a>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide externals">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/images/meetme/2.jpg" class="d-block w-100 meetmeImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/meetme/1.jpg" class="d-block w-100 meetmeImg" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Section -->
    <div class="meetme_content">
        <div class="meetContent">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut consequatur
                debitis mollitia recusandae excepturi nulla aliquam ea adipisci ipsum,
            </p>
            <a href="#" class="btn btn-primary">Book now</a>
        </div>
    </div>

    <div class="ads card">

    </div>
</div>

@endsection
