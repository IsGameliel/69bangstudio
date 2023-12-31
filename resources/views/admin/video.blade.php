@extends('layouts.admin')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('includes/dashboard/navbar')
    <!-- Navbar End -->

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Responsive Table</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Models Present</th>
                                    <th scope="col">New Models</th>
                                    <th scope="col">Block Countries</th>
                                    <th scope="col">agree</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date Uploaded</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($video as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->models_present}}</td>
                                    <td>{{$item->new_models}}</td>
                                    <td>{{$item->block_countries}}</td>
                                    <td>{{$item->agree}}</td>
                                    <td>{{$item->file}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->timestamp}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
