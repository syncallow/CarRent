@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Rents</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $orders->count() }}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Revenue</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>${{ number_format($orders->sum('total_price'), 0, '.', ',') }}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Cars</h5>

                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Car</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Rented</th>
                                            <th scope="col">Available for Today</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cars as $car)
                                        <tr>
                                            <th scope="row"><a href="{{ route('admin.cars.show', $car->id) }}"><img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->title }}" height="60px" width="100px"></a></th>
                                            <td><a href="{{ route('admin.cars.show', $car->id) }}" class="text-primary fw-bold">{{ $car->title }}</a></td>
                                            <td>${{ $car->price }}</td>
                                            <td class="fw-bold">{{ $car->orders->count() }}</td>
                                                @if($car->getCurrentOrder())
                                                    <td><span class="badge rounded-pill bg-danger">No</span></td>
                                                @else
                                                    <td><span class="badge rounded-pill bg-success">Yes</span></td>
                                                @endif
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- News & Updates Traffic -->
                    <div class="card">

                        <div class="card-body pb-0">
                            <h5 class="card-title">Posts</h5>

                            <div class="news">
                                @foreach($posts as $post)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('/storage/' . $post->image) }}" alt="">
                                    <h4><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></h4>
                                    <p>{{ $post->description }}</p>
                                </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
