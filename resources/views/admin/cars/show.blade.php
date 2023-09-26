@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $car->title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Car Details</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p>
                                <a href="{{ route('admin.cars.index') }}" title="Go back" class="btn btn-dark"><i class="bi bi-arrow-left"></i></a>
                                <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-success" title="Edit car"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin.cars.delete', $car->id) }}" onclick="event.preventDefault(); document.getElementById('deleteCar').submit(); " class="btn btn-danger" title="Delete car"><i class="bi bi-trash-fill"></i></a>
                            <form id="deleteCar" action="{{ route('admin.cars.delete', $car->id) }}" method="post" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form></p>
                            <!-- List group with custom content -->
                            <ol class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Title</div>
                                        {{ $car->title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Price</div>
                                        {{ $car->price }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Luggage</div>
                                        {{ $car->luggage }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Doors</div>
                                        {{ $car->doors }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Passenger</div>
                                        {{ $car->passenger }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Description</div>
                                        {{ $car->description }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold mb-2">Image</div>
                                        @if($car->image)
                                            <img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" width="300px" height="200px">
                                        @else
                                        No Image
                                        @endif
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Status</div>
                                        @if($car->is_published)
                                            <span class="badge rounded-pill bg-success">Published</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Not Published</span>
                                        @endif
                                    </div>
                                </li>
                            </ol><!-- End with custom content -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection
