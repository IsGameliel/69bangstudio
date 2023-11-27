<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>69bangstudio</title>
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/tablet.css">

</head>
<body>
    <div class="preloader-wrapper">
        <div class="preloader"> XXX69BANG</div>
    </div>
    <!-- Navigation -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.jpg" alt=""></a>
            {{-- <a class="navbar-brand" href="#">Lets Play</a> --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item DPI" href="#">Straight</a></li>
                            <li><a class="dropdown-item" href="#">Bisexual</a></li>
                            <li><a class="dropdown-item" href="#">Gay</a></li>
                            <li><a class="dropdown-item" href="#">Lesbian</a></li>
                            <li><a class="dropdown-item" href="#">Solo</a></li>
                            <li><a class="dropdown-item" href="#">Others</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('others') }}">Affiliate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('others') }}">Vacancies</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->type == 'superadmin')
                            <a class="dropdown-item" href="{{ url('superadmin/home') }}">
                                Dashboard
                            </a>
                            @elseif(Auth::user()->type == 'admin')
                            <a class="dropdown-item" href="{{ url('admin/home') }}">
                                Dashboard
                            </a>
                            @else
                            <a class="dropdown-item" href="{{ url('/home') }}">
                                Dashboard
                            </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navigation -->

    @yield('content')

    <footer class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="content">
                        <h3>Contact Us</h3>
                        <p>Email: xxxxxxxxx <br>
                        Address: xxxxxxxxxx <br>
                        Phone: xxxxxxxxxxxx</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="content">
                        <h3>Quick Links</h3>
                        <p><a href="{{ url('policy') }}">Legal</a></p>
                        <p><a href="{{ url('comming_soon') }}">2257</a></p>
                        <p><a href="{{ url('comming_soon') }}">Sponsorship</a></p>
                        <p><a href="{{ url('others') }}">Promotions</a></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="content">
                        <h3>Disclaimer</h3>
                        <p>All models appearing on this website are 18 years or older. Click here for records required pursuant to 18 U.S.C. 2257 Record Keeping Requirements Compliance Statement. By entering this site you swear that you are of legal age in your area to view adult material and that you wish to view such material. Please visit our Authorised Payment Processor Vendo</p>
                            <div class="socials">
                                <a href="https://t.me/xxx69bangstudio">
                                    <img src="assets/images/icons/telegram.png" alt="telegram">
                                </a>
                                <a href="Https://www.x.com/69bang_meetme">
                                    <img src="assets/images/icons/twitter.png" alt="twitter">
                                </a>
                                <a href="https://www.snapchat.com/add/meetme_69bang">
                                    <img src="assets/images/icons/snapchat.png" alt="snapchat">
                                </a>
                                <a href="Https://wa.me/22959783973">
                                    <img src="assets/images/icons/whatsapp.png" alt="whatsapp">
                                </a>
                                <a href="https://www.tiktok.com/@xxx69bang">
                                    <img src="assets/images/icons/tiktok.png" alt="tiktok">
                                </a>
                                <a href="">
                                    <img src="assets/images/icons/instagram.png" alt="instagram">
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100092983076930&mibextid=ZbWKwL">
                                    <img src="assets/images/icons/facebook.png" alt="facebook">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next_footer">
            <div class="copyright">
                &copy; Copyright <strong><span>xxx69Bangstudios</span></strong>. All Rights Reserved
            </div>
              <div class="credits">
                Designed by <a href="#">xxx69bang</a>
              </div>
        </div>
    </footer>
    {{-- <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/fontawesome/js/all.js"></script>
</body>
</html>
