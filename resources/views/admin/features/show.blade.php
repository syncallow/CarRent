@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Features</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $feature->title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Feature Details</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-success" title="Edit feature"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin.features.delete', $feature->id) }}" onclick="event.preventDefault(); document.getElementById('deleteFeature').submit(); " class="btn btn-danger" title="Delete feature"><i class="bi bi-trash-fill"></i></a>
                            <form id="deleteFeature" action="{{ route('admin.features.delete', $feature->id) }}" method="post" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form></p>
                            <!-- List group with custom content -->
                            <ol class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Title</div>
                                        {{ $feature->title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Description</div>
                                        {{ $feature->description }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Icon</div>
                                        <span class="{{ $feature->icon }} fs-2"></span>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Status</div>
                                        @if($feature->is_published)
                                            <span class="badge rounded-pill bg-success">Published</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Not Published</span>
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
