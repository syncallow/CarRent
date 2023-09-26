@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">

        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>Book car</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ route('index') }}">Home</a> <span class="mx-2">/</span> <strong>Book car</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">

        <div class="container">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="row justify-content-center text-center">
                    <div class="col-7 text-center mb-5">
                        <h2>Personal information form to rent a car</h2>
                        <p>Please, fill form below to rent your car!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-5">
                        <form action="{{ route('book.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="car_id" value="{{ $car->id }}">
                            <input type="hidden" name="total_price" value="{{ $data['total_price'] }}">
                            <input type="hidden" name="book_start_date" value="{{ $data['book_start_date'] }}">
                            <input type="hidden" name="book_end_date" value="{{ $data['book_end_date'] }}">
                            @if(Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group row">
                                    <div class="col-md-6 mb-4 mb-lg-0">
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="{{ Auth::user()->phone }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                            @endif

                            @guest
                                <div class="form-group row">
                                    <div class="col-md-6 mb-4 mb-lg-0">
                                        <input name="guest_name" type="text" class="form-control" placeholder="First name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="guest_lastname" type="text" class="form-control" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input name="guest_phone" type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            @endguest
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Rent Now">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Order Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span><img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" width="100px" height="80px"> <strong>{{ $car->title }}</strong></span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Dates:</span><span>From: <strong>{{ $data['book_start_date'] }}</strong></span> <span>To: <strong>{{ $data['book_end_date'] }}</strong></span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Total price for <strong>{{ $data['days'] }}</strong> days rent</span><span><strong>{{ $data['total_price'] }} $</strong></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
