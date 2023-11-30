@extends('layouts.admin')

@section('content')

<div class="content">
    <!-- Navbar Start -->
    @include('includes/dashboard/navbar')
    <!-- Navbar End -->
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="mb-4">Title</h6>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" id="floatingText" placeholder="Title">
                        </div>
                        <h6 class="mb-4">Description</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 150px;"></textarea>
                        </div>
                        <h6 class="mb-4 mt-4">Upload file</h6>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="image" id="floatingText" placeholder="Title">
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="upload" class="btn btn-primary btn-block btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

@endsection
