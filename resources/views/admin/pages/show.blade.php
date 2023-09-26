@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $page->name }} - page</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Page Details</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p>
                                <a href="{{ route('admin.pages.index') }}" title="Go back" class="btn btn-dark"><i class="bi bi-arrow-left"></i></a>
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-success" title="Edit page"><i class="bi bi-pencil-square"></i></a>
                            </p>
                            <!-- List group with custom content -->
                            <ol class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Name</div>
                                        {{ $page->name }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Title</div>
                                        {{ $page->title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Meta Title</div>
                                        {{ $page->meta_title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Meta Description</div>
                                        {{ $page->meta_description }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Text</div>
                                        {!! $page->text !!}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Image</div>
                                        @if($page->image)
                                            <img src="{{ asset('/storage/' . $page->image) }}" alt="{{ $page->title }}" width="300px" height="200px">
                                        @else
                                        No Image
                                        @endif
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Status</div>
                                        @if($page->is_published)
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
