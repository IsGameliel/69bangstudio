@extends('layouts.main')

@section('content')

<div class="container">
    <div class="store">
        <div class="content">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Rem autem error deserunt quod praesentium debitis id, provident
                cumque commodi quos a atque ipsa dolorem consequuntur neque,
                culpa voluptas laboriosam consectetur.</p>
        </div>
        <div class="banner2">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-lg-6 col-sm-6 col-6 mobile">
                        <div class="static_image">
                            <img src="{{ asset('assets/images/store/1.jpg') }}" class="w-100 staticImage" alt="">
                        </div>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6 col-6 mobile">
                        <div id="carouselExampleDark" class="carousel carouselDark slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="assets/images/meetme/2.jpg" class="d-block w-100 meetmeImg" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/meetme/1.jpg" class="d-block w-100 meetmeImg" alt="...">
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
            </div>
        </div>
        <div class="row">
            @foreach ($store as $item)
            <div class="col-md-3 col-lg-3 col-sm-3 col-5 ">
                <div class="product-img">
                    <img src="{{ asset('store/' . $item->image)}}" alt="">
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-9 col-7">
                <div class="product-description">
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->description}}</p>
                    <a href="#whatsapp" class="btn btn-secondary">Place Order</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
