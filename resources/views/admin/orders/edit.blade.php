@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Order Info</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item">Orders</li>
                    <li class="breadcrumb-item active">Edit</li>
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
                            <h5 class="card-title"><a href="{{ url()->previous() }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Edit Order Info</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.orders.update', $order->id) }}" method="post" id="editOrder">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Selected car</label>
                                    <div class="col-sm-10">
                                        <div class="mb-2">
                                            <img id="car_prev" src="{{ asset('/storage/' . $order->car->image) }}" alt="{{ $order->car->title }}" width="150px" height="100px">
                                        </div>
                                        <select name="car_id" class="form-select" aria-label="car id" onchange="document.getElementById('car_prev').style.display = 'none'">
                                            @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ $car->id === $order->car->id ? 'selected': ''}}>{{ $car->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Pick up</label>
                                    <div class="col-sm-10">
                                        <input id="bookStartDate" name="book_start_date" type="date" class="form-control" value="{{ $order->book_start_date }}" min="" max="" required>
                                        @error('book_start_date')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Drop off</label>
                                    <div class="col-sm-10">
                                        <input id="bookEndDate" name="book_end_date" type="date" class="form-control" value="{{ $order->book_end_date }}" min="" max="" required>
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
                                                <option value="{{ $user->id }}" @if($order->user_id && $order->user_id === $user->id) selected @endif>{{ $user->name}}</option>
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
                                        <input type="text" class="form-control" name="guest_name" value="@if($order->guest_name) {{ $order->guest_name }} @else {{ old('guest_name') }} @endif" id="guest_name">
                                        @error('guest_name')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Guest lastname</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="guest_lastname" value="@if($order->guest_lastname) {{ $order->guest_lastname }} @else {{ old('guest_lastname') }} @endif" id="guest_lastname">
                                        @error('guest_lastname')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Guest phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="guest_phone" value="@if($order->guest_phone) {{ $order->guest_phone }} @else {{ old('guest_phone') }} @endif" id="guest_phone">
                                        @error('guest_phone')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Price for <span class="ctDays"></span> days rent</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input aria-describedby="price" type="number" class="form-control" name="total_price" id="totalPrice" value="{{ $order->total_price }}" readonly>
                                            @error('total_price')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Price per day</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input aria-describedby="price" type="number" class="form-control" id="priceCar" value="{{ $order->car->price}}" disabled>
                                        </div>
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
