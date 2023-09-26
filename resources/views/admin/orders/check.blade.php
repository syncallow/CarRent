@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add a new order</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add a new order</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url()->previous() }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Add a new order</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.orders.checking') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select a car</label>
                                    <div class="col-sm-10">
                                        <select name="car_id" class="form-select" aria-label="Default select example" required>
                                            @foreach($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('car_id')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Pick up</label>
                                    <div class="col-sm-10">
                                        <input id="bookStartDate" name="book_start_date" type="date" class="form-control" min="" required>
                                        @error('book_start_date')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Drop off</label>
                                    <div class="col-sm-10">
                                        <input id="bookEndDate" name="book_end_date" type="date" class="form-control" min="" required>
                                        @error('book_end_date')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Check availability</button>
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
