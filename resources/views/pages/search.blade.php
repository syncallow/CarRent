@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">

        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>Search for car</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ route('index') }}">Home</a> <span class="mx-2">/</span> <strong>Search car</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">

        <div class="container">
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>There is list of free cars on your dates</strong></h2>
                    <p class="mb-5">You can select free cars below.</p>
                </div>
            </div>
                <div style="display:none">
                    <div id="data">
                        <div class="col-lg-12">
                            <h2 class="section-heading">Rent car.</h2>
                            <p class="mb-5">Select rent dates and change car if u need.</p>
                        </div>
                        <form action="{{ route('car.check')}}" method="post" class="trip-form">
                            @csrf
                            <div class="row align-items-center">

                                <div class="mb-3 mb-md-0 col-md-3">
                                    <select name="car_id" class="custom-select form-control car-select" id="car_id">
                                        <option value="">Select Car</option>
                                        @foreach($freeCars as $freeCar)
                                            <option value="{{ $freeCar->id }}">{{ $freeCar->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input name="book_start_date" type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3" value="{{ $data['book_start_date'] }}">
                                        <span class="icon icon-date_range"></span>

                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input name="book_end_date" type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3" value="{{ $data['book_end_date'] }}">
                                        <span class="icon icon-date_range"></span>
                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            <div class="row">

                @foreach($freeCars as $freeCar)
                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="{{ asset('/storage/' . $freeCar->image) }}" alt="{{ $freeCar->title }}" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>{{ $freeCar->title }}</h3>
                            <div class="rent-price">
                                <strong>${{ $freeCar->price }}</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">{{ $freeCar->luggage }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">{{ $freeCar->doors }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">{{ $freeCar->passenger }}</span>
                                </div>
                            </div>
                            <div>
                                <p>{{ $freeCar->description }}</p>
                                <p><a id="inline" href="#data" data-id="{{ $freeCar->id }}" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="custom-pagination">
                        <a href="#">1</a>
                        <span>2</span>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-primary py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-md-0">
                    <h2 class="mb-0 text-white">{{ $propose->title }}</h2>
                    <p class="mb-0 opa-7">{{ $propose->description }}</p>
                </div>
                <div class="col-lg-5 text-md-right">
                    <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
