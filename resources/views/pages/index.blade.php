@extends('layouts.main')

@section('content')
    <div class="hero" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">

                    <div class="row mb-5">
                        <div class="col-lg-7 intro">
                            {!! $page->text !!}
                        </div>
                    </div>

                    <form action="{{ route('car.check')}}" method="post" class="trip-form">
                        <div class="p-2">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    @csrf
                        <div class="row align-items-center">

                            <div class="mb-3 mb-md-0 col-md-3">
                                <select name="car_id" class="custom-select form-control" id="car_id">
                                    <option value="">Select Car</option>
                                    @foreach($cars as $car)
                                    <option value="{{ $car->id }}">{{ $car->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mb-md-0 col-md-3">
                                <div class="form-control-wrap">
                                    <input name="book_start_date" type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                                    <span class="icon icon-date_range"></span>

                                </div>
                            </div>
                            <div class="mb-3 mb-md-0 col-md-3">
                                <div class="form-control-wrap">
                                    <input name="book_end_date" type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
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
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <h2 class="section-heading"><strong>{{ $info->steps_title }}</strong></h2>
            <p class="mb-5">{{ $info->steps_desc }}</p>

            <div class="row mb-5">
                @foreach($steps as $step)
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <span>{{ $step->number }}</span>
                        <div class="step-inner">
                            <span class="number text-primary">0{{ $step->number }}.</span>
                            <h3>{{ $step->title }}</h3>
                            <p>{{ $step->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <a href="{{ $promo->video_link }}" class="d-flex align-items-center play-now mx-auto">
                <span class="icon">
                  <span class="icon-play"></span>
                </span>
                        <span class="caption">Video how it works</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center order-lg-2">
                    <div class="img-wrap-1 mb-5">
                        <img src="{{ asset('/storage/'. $promo->image) }}" alt="{{ $promo->title }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 ml-auto order-lg-1">
                    <h3 class="mb-4 section-heading"><strong>{{ $promo->title }}</strong></h3>
                    <p class="mb-5">{{ $promo->description}}</p>

                    <p><a href="#" class="btn btn-primary">Meet them now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>{{ $info->cars_title }}</strong></h2>
                    <p class="mb-5">{{ $info->cars_desc}}</p>
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
                                <p><a href="#" data-id="{{ $car->id }}" class="btn btn-primary btn-sm rent-car">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>{{ $info->features_title }}</strong></h2>
                    <p class="mb-5">{{ $info->features_desc }}</p>
                </div>
            </div>

            <div class="row">
                @foreach($features as $feature)
                <div class="col-lg-4 mb-5">
                    <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="{{ $feature->icon }}"></span>
              </span>
                        <div class="service-1-contents">
                            <h3>{{ $feature->title }}</h3>
                            <p>{{ $feature->description }}</p>
                            <p class="mb-0"><a href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


{{--  Testimonials block  --}}
    @include('includes.testimonials')
{{-- End Testimonials block  --}}

<!---  Propose block  --->
    @include('includes.propose')
{{--  End Propose block  --}}
@endsection
