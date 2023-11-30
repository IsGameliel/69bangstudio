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
                    <form action="{{ route('push_video') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->has('video'))
                            {{ $errors->first('video') }}
                        @endif
                        <h6 class="mb-4">Main orientation categories</h6>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="categories" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="Straight">Straight</option>
                                <option value="Gay">Gay</option>
                                <option value="Bisexual Gay">Bisexual Gay</option>
                                <option value="Bisexual Lesbian">Bisexual Lesbian</option>
                                <option value="Lesbian">Lesbian</option>
                                <option value="Transexual Men">Transexual Men</option>
                                <option value="Transexual Women">Transexual Women</option>
                                <option value="Solo Boys">Solo Boys</option>
                                <option value="Solo Girls">Solo Girls</option>
                                <option value="For Women">For Women</option>
                            </select>
                            {{-- <select class="form-select" name="categories" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="Straight">check</option>
                                <option value="Gay">check 1</option>
                                <option value="Bisexual Gay">check 2</option>
                                <option value="Bisexual Lesbian">check 3</option>
                            </select> --}}
                        </div>
                        <h6 class="mb-4">Video Type</h6>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="premium">Premium</option>
                                <option value="free">Free</option>
                            </select>
                        </div>
                        <h6 class="mb-4">Privacy</h6>
                        <div class="form-floating mb-3">
                            <input type="radio" name="privacy"> <span style="margin-left: 10px;">Everyone</span>
                            {{-- <input type="radio" name="individual"> <span style="margin-left: 10px;">Individual page</span> --}}
                        </div>
                        <h6 class="mb-4">Title</h6>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" id="floatingText" placeholder="Title">
                        </div>
                        <h6 class="mb-4">Description</h6>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 150px;"></textarea>
                        </div>
                        <h6 class="mb-4 mt-4">Models that appear in the video</h6>
                        <div class="form-floating mb-3">
                            <input type="radio" name="models_present"><span style="margin-left: 10px;">There are no real persons in the content</span>
                            <p>You are however allowed to create models for your fictional characters.</p>
                            <input type="text" class="form-control" name="new_models" id="floatingText" placeholder="Title">
                        </div>
                        <h6 class="mb-4 mt-4">Block in some countries</h6>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="block_countries" id="floatingText" placeholder="Title">
                        </div>

                        <div class="mt-4 p-5 bg-primary text-white rounded">
                            <h3 class="display-4">Warning!</h3>
                            <ul>
                                <li>If you upload illegal content, your account will be disabled and possibly deleted completely.</li>
                                <li>Pedophiles are reported to the competent authorities.</li>
                                <li>Do not upload from multiple accounts or you might get banned even with legal content! Please read our updated policy here.</li>
                            </ul>
                          </div>
                          <div class="form-floating mb-3">
                            <input class="mt-4" type="radio" name="agree"> <span style="margin-left: 10px;">By uploading the video(s), you certify that you have the rights on the video(s), that the persons in it are at least 18, and that you agree to the Terms of service and the Privacy policy terms.</span>
                        </div>

                        <h6 class="mb-4 mt-4">Upload file</h6>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="file" id="floatingText" placeholder="Title">
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
