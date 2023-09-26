@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">
        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>{{ $page->title }}</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ route('index') }}">Home</a> <span class="mx-2">/</span> <strong>{{ $page->title }}</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    {!! $page->text !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name" name="name">
                                @error('name')
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                                @error('lastname')
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Phone number" name="phone">
                                @error('phone')
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                @error('message')
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Address:</span>
                                <span>{{ $info->address }}</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>{{ $info->phone }}</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>{{ $info->email }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
