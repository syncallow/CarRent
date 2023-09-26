@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active"># {{ $order->id }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Order Details</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p>
                                <a href="{{ route('admin.orders.index') }}" title="Go back" class="btn btn-dark"><i class="bi bi-arrow-left"></i></a>
                                <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-success" title="Edit order"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin.orders.delete', $order->id) }}" onclick="event.preventDefault(); document.getElementById('deleteOrder').submit(); " class="btn btn-danger" title="Delete order"><i class="bi bi-trash-fill"></i></a>
                            <form id="deleteOrder" action="{{ route('admin.orders.delete', $order->id) }}" method="post" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form></p>
                            <!-- List group with custom content -->
                            <ol class="list-group">
                                @if($order->guest_name && $order->guest_lastname && $order->guest_phone)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Guest Customer Name</div>
                                        {{ $order->guest_name }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Guest Customer LastName</div>
                                        {{ $order->guest_lastname }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Guest Customer Phone</div>
                                        {{ $order->guest_phone }}
                                    </div>
                                </li>
                                    @elseif($order->user_id)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Customer name</div>
                                            {{ $order->user->name }}
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Customer phone</div>
                                            {{ $order->user->phone }}
                                        </div>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Book Start Date</div>
                                        {{ \Carbon\Carbon::parse($order->book_start_date)->isoFormat('MMM Do YYYY') }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Book End Date</div>
                                        {{ \Carbon\Carbon::parse($order->book_end_date)->isoFormat('MMM Do YYYY') }}
                                    </div>
                                </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Total price</div>
                                        {{ $order->total_price }} $
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold mb-2">{{ $order->car->title }}</div>
                                        @if($order->car->image)
                                            <img src="{{ asset('/storage/' . $order->car->image) }}" alt="{{ $order->car->title }}" width="300px" height="200px">
                                        @else
                                        No Image
                                        @endif
                                    </div>
                                </li>
                            </ol><!-- End with custom content -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection
