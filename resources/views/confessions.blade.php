@extends('layouts.main')

@section('content')

<div class="container">
    <div class="confession">
        @include('includes/_confession_nav')
        <div class="top_section">
            <h2 class="confession_heading">Confession Stories</h2>
            <h3>I have to confess ... Please forgive me for I have sinned</h3>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate totam eos a
                    deserunt in qui magnam odit magni sunt eius similique quos maxime, reiciendis amet omnis autem rem doloribus.</p>
            </div>
            <div id="text-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dignissimos repellendus aente dicta, laboriosam porro libero. Itaque aliquid minus magni, mollitia fugit alias.</p>
                    </div>
                    <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dignissimos repellendus architecto exercitationem cumque impedit, nobis, et sun</p>
                    </div>
                    <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dignissimos repellendus architecto exercitationem cumque impedit, nobis, et sunt sapiente dicta, laboriosam porro libero. Itaque aliquid minus magni, mollitia fugit alias.</p>
                    </div>
                    <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dignissimos repellendus architecto exercitationnte dicta, laboriosam porro libero. Itaque aliquid minus magni, mollitia fugit alias.</p>
                    </div>
                    <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dignissibis, et sunt sapiente dicta, laboriosam porro libero. Itaque aliquid minus magni, mollitia fugit alias.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#text-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#text-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="iframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/x5B7IMqOITo?si=Mg51AAkDPw9shT0r" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus id, unde numquam asperiores a eum culpa nihil tempore ea reprehenderit vitae, ab dolore, perspiciatis mollitia. Voluptas iste voluptates distinctio quasi?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat omnis deserunt commodi dolorum facere dolorem temporibus nostrum at quia, recusandae dicta sunt consequatur pariatur! Inventore cupiditate deserunt odio odit a? odi dolorum facere dolorem temporibus nostrum at quia, recusandae dicta sunt consequatur pariatur! Inventore cupiditate deserunt odio odit a? </p>
                   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, tempore ipsa accusantium esse labore omnis quasi animi modi reprehenderit officia odio. Deserunt dolores laudantium reiciendis distinctio odit similique nulla error? henderit officia odio. Deserunt dolores laudantium reiciendis distinctio odit similique nulla error?</p>
                   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, tempore ipsa accusantium esse labore omnis quasi animi modi reprehenderit officia odio. Deserunt dolores laudantium reiciendis distinctio odit similique nulla error? henderit officia odio. Deserunt dolores laudantium reiciendis distinctio od error? henderit officia odio. Deserunt dolores laudantium reiciendis distinctio od it similique nulla error?</p>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <a href="{{ url('confess') }}" class="btn btn-danger">Confess Here </a>
                </div>
            </div>
        </div>
        <nav class="navbar navs navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Confessions</a>
                  </li>
                </ul>
                <div class="d-flex sec_nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Views</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Recent</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Upvoted</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Comments</a>
                    </li>
                </div>
              </div>
            </div>
          </nav>
          <div class="card confession_bg">
            <div class="container">
                <h4 class="title">Confession #0001</h4>
                <p class="date">23/12/2023</p>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Magna eget est lorem ipsum dolor sit. Libero volutpat sed cras ornare.
                    Vitae ultricies leo integer malesuada nunc vel risus commodo viverra.
                </p>
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-success">Addiction</a>
                        <a href="#" class="btn btn-secondary">Caught</a>
                        <a href="#" class="btn btn-secondary">Act</a>
                    </div>
                    <div class="col d-flex">
                        <p><i class="fa-regular fa-message"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-regular fa-star"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-regular fa-eye"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-solid fa-triangle-exclamation"></i><span style="margin-left: 5px;">2</span></p>
                    </div>
                </div>
            </div>
          </div>

          <div class="card confession_bg">
            <div class="container">
                <h4 class="title">Confession #0023</h4>
                <p class="date">23/12/2022</p>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Magna eget est lorem ipsum dolor sit. Libero volutpat sed cras ornare. Vitae ultricies leo integer
                    malesuada nunc vel risus commodo viverra. Gravida in fermentum et sollicitudin ac orci phasellus egestas tellus.
                    Vel facilisis volutpat est velit egestas. Cras adipiscing enim eu turpis egestas. Consectetur a erat nam at lectus urna duis.
                    Bibendum enim facilisis gravida neque convallis a. Euismod quis viverra nibh cras pulvinar mattis. Tincidunt arcu non sodales
                    neque sodales ut etiam sit. Purus faucibus ornare suspendisse sed nisi. Malesuada nunc vel risus commodo viverra maecenas
                    accumsan lacus. Sed id semper risus in hendrerit gravida rutrum quisque. Vel
                </p>
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-success">Addiction</a>
                        <a href="#" class="btn btn-secondary">Caught</a>
                        <a href="#" class="btn btn-secondary">Act</a>
                    </div>
                    <div class="col d-flex">
                        <p><i class="fa-regular fa-message"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-regular fa-star"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-regular fa-eye"></i><span style="margin-left: 5px;">2</span></p>
                        <p><i class="fa-solid fa-triangle-exclamation"></i><span style="margin-left: 5px;">2</span></p>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
<script>
    var myCarousel = new bootstrap.Carousel(document.getElementById('text-carousel'), {
        interval: 3000 // Set the interval for auto-sliding (in milliseconds)
    });
</script>

@endsection
