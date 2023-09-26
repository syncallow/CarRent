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


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                    <img src="{{ asset('/storage/' . $page->image) }}" alt="{{ $page->title }}" class="img-fluid rounded">
                </div>
                <div class="col-lg-4 mr-auto">
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </div>

    @include('includes.propose')
@endsection
