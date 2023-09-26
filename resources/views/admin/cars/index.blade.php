@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cars</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Cars</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cars</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.cars.create') }}" class="btn btn-primary" title="Add a new car"><i class="bi bi-plus-square"></i></a></p>

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Cars</h5>

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Car</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Display</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cars as $car)
                                            <tr>
                                                <th scope="row"><a href="#"><img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" height="60px" width="60px"></a></th>
                                                <td><a href="{{ route('admin.cars.show', $car->id) }}" class="text-primary fw-bold">{{ $car->title }}</a></td>
                                                <td>${{ $car->price }}</td>
                                                <td class="fw-bold">
                                                    @if($car->is_published)
                                                        <span class="badge rounded-pill bg-success">Published</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-danger">Not Published</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.cars.show', $car->id) }}" class="btn btn-info" title="Show car"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-success" title="Edit car"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('admin.cars.delete', $car->id) }}" onclick="event.preventDefault(); document.getElementById('deleteCar').submit(); " class="btn btn-danger" title="Delete car"><i class="bi bi-trash-fill"></i></a>
                                                    <form id="deleteCar" action="{{ route('admin.cars.delete', $car->id) }}" method="post" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Top Selling -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    @endsection
