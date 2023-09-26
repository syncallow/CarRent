@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">
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
                            <select name="car_id" class="custom-select form-control car-select" id="car_id" required>
                                <option value="">Select Car</option>
                                @foreach($cars as $car)
                                    <option value="{{ $car->id }}">{{ $car->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mb-md-0 col-md-3">
                            <div class="form-control-wrap">
                                <input name="book_start_date" type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3" required>
                                <span class="icon icon-date_range"></span>

                            </div>
                        </div>
                        <div class="mb-3 mb-md-0 col-md-3">
                            <div class="form-control-wrap">
                                <input name="book_end_date" type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3" required>
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
        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>{{ $page->title }}</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ route('index') }}">Home</a> <span class="mx-2">/</span> <strong>Listings</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>{{ $info->cars_title }}</strong></h2>
                    <p class="mb-5">{{ $info->cars_desc }}</p>
                </div>
            </div>


            <div class="row">
                @foreach($cars as $car)
                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>{{ $car->title }}</h3>
                            <div class="rent-price">
                                <strong>${{ $car->price }}</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">{{ $car->luggage }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">{{ $car->doors }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">{{ $car->passenger }}</span>
                                </div>
                            </div>
                            <div>
                                <p>{{ $car->description }}</p>
                                <p><a id="inline" href="#data" data-id="{{ $car->id }}" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            {!! $cars->links('layouts.pagination') !!}
        </div>
    </div>

    <!---  Propose block  --->
    @include('includes.propose')
    {{--  End Propose block  --}}
@endsection
