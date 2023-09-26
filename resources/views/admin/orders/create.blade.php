@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add a new car</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add a new car</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.orders.check') }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Add a new car</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.orders.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Selected car</label>
                                    <div class="col-sm-10">
                                        <div class="mb-2">
                                            <img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" width="150px" height="100px">
                                        </div>
                                        <select name="car_id" class="form-select" aria-label="car id" readonly="">
                                            <option value="{{ $car->id }}" selected="">{{ $car->title }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Pick up</label>
                                    <div class="col-sm-10">
                                        <input name="book_start_date" type="date" class="form-control" value="{{ $data['book_start_date'] }}" readonly>
                                        @error('book_start_date')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Drop off</label>
                                    <div class="col-sm-10">
                                        <input name="book_end_date" type="date" class="form-control" value="{{ $data['book_end_date'] }}" readonly>
                                        @error('book_end_date')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select user(registred)</label>
                                    <div class="col-sm-10">
                                        <select id="user_id" name="user_id" class="form-select" aria-label="Select User" onchange="disableGuest()">
                                            <option value="">--- Select registered user ---</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Guest name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="guest_name" value="{{ old('guest_name') }}" id="guest_name">
                                        @error('guest_name')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Guest lastname</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="guest_lastname" value="{{ old('guest_lastname') }}" id="guest_lastname">
                                        @error('guest_lastname')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Guest phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="guest_phone" value="{{ old('guest_phone') }}" id="guest_phone">
                                        @error('guest_phone')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Price for {{ $data['days'] }} days rent</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="price">$</span>
                                            <input aria-describedby="price" type="number" class="form-control" name="total_price" value="{{ $data['total_price'] }}" readonly>
                                            @error('total_price')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add</button>
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
