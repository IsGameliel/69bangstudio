<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <img src="{{ asset('assets/images/logo.jpg')}}" alt="" class="logo">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{Auth::user()->type}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-video me-2"></i>Videos</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('admin/video')}}" class="dropdown-item">All videos</a>
                    <a href="{{ url('admin/video/upload')}}" class="dropdown-item">Upload Video</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart me-2"></i>Store</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="#" class="dropdown-item">All Products</a>
                    <a href="#" class="dropdown-item">Upload product</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
