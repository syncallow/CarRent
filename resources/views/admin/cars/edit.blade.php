@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Site Info</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item">Cars</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url()->previous() }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Edit Car Info</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ $car->title }}">
                                        @error('title')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="content" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" style="height: 100px">{{ $car->description }}</textarea>
                                        @error('description')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" value="{{ $car->price }}">
                                        @error('price')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Luggage</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="luggage" value="{{ $car->luggage }}">
                                        @error('luggage')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Doors</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="doors" value="{{ $car->doors }}">
                                        @error('doors')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Passenger</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="passenger" value="{{ $car->passenger }}">
                                        @error('passenger')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                    @if($car->image)
                                        <div class="mb-2">
                                            <img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" width="300px" height="200px">
                                        </div>
                                    @endif

                                        <input class="form-control" name="image" type="file" id="image">
                                        @error('image')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Publish Status</label>
                                    <div class="col-sm-10">
                                            <select name="is_published" class="form-select" aria-label="Default select example">
                                                <option value="1" {{ $car->is_published ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ !$car->is_published ? 'selected' : '' }}>No</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
