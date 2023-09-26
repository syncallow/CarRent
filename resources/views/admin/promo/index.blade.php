@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Promo</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Promo</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            @if(session('status'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="mb-3"><a class="btn btn-success" href="{{ route('admin.promo.edit', $promo->id) }}">Edit</a></div>
            <div class="row align-items-top">
                <div class="col-lg-12">

                    <!-- Card with an image on left -->
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('/storage/' . $promo->image) }}" class="img-fluid rounded-start" alt="{{ $promo->title }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $promo->title }}</h5>
                                    <p class="card-text">{{ $promo->description }}</p>
                                    <p>{{ $promo->video_link }}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card with an image on left -->

                </div>

            </div>
        </section>

    </main>
@endsection
