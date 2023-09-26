@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Orders</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.orders.check') }}" class="btn btn-primary" title="Add a new order"><i class="bi bi-plus-square"></i></a></p>

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Orders</h5>

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Car</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <th scope="row"><a href="#"><img src="{{ asset('/storage/' . $order->car->image) }}" alt="{{ $order->car->title }}" height="60px" width="60px"></a></th>
                                                <td><a href="{{ route('admin.cars.show', $order->car->id) }}" class="text-primary fw-bold">{{ $order->car->title }}</a></td>
                                                <td>${{ $order->total_price }}</td>
                                                <td class="fw-bold">
                                                    @if($order->user_id)
                                                        <a href="{{ route('admin.user.show', $order->user->id) }}">{{ $order->user->name }}</a>
                                                    @else
                                                    {{ $order->guest_name }} {{ $order->guest_lastname }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info" title="Show order"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-success" title="Edit order"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('admin.orders.delete', $order->id) }}" onclick="event.preventDefault(); document.getElementById('deleteOrder').submit(); " class="btn btn-danger" title="Delete order"><i class="bi bi-trash-fill"></i></a>
                                                    <form id="deleteOrder" action="{{ route('admin.orders.delete', $order->id) }}" method="post" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Top Selling -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    @endsection
