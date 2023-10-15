<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>69bangstudio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/tablet.css">

</head>
<body>
    <div class="preloader-wrapper">
        <div class="preloader">xx69bang</div>
    </div>
    <!-- Navigation -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.jpg" alt=""></a> --}}
            <a class="navbar-brand" href="#">Lets Play</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item DPI" href="#">Straight</a></li>
                            <li><a class="dropdown-item" href="#">Bi</a></li>
                            <li><a class="dropdown-item" href="#">G</a></li>
                            <li><a class="dropdown-item" href="#">L</a></li>
                            <li><a class="dropdown-item" href="#">Solo</a></li>
                            <li><a class="dropdown-item" href="#">Others</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Affiliate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vacancies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navigation -->

    @yield('content')

    <footer class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="content">
                        <h3>Contact Us</h3>
                        <p>Email: xxxxxxxxx <br>
                        Address: xxxxxxxxxx <br>
                        Phone: xxxxxxxxxxxx</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="content">
                        <h3>Disclaimer</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto vero,
                            cum quae voluptatum eveniet facilis repellendus dolore earum! Explicabo
                            ex ullam a pariatur ut expedita modi libero totam cupiditate architecto!</p>
                            <div class="socials">
                                <a href="">
                                    <img src="assets/images/icons/telegram.png" alt="telegram">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/twitter.png" alt="twitter">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/snapchat.png" alt="snapchat">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/whatsapp.png" alt="whatsapp">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/tiktok.png" alt="tiktok">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/instagram.png" alt="instagram">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/facebook.png" alt="facebook">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next_footer">
            <div class="copyright">
                &copy; Copyright <strong><span>xxx69Bangstudis</span></strong>. All Rights Reserved
            </div>
              <div class="credits">
                Designed by <a href="#">xx69bang</a>
              </div>
        </div>
    </footer>
    {{-- <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/fontawesome/js/all.js"></script>
</body>
</html>
