@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>List Group</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post Details</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success" title="Edit post"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin.posts.delete', $post->id) }}" onclick="event.preventDefault(); document.getElementById('deletePost').submit(); " class="btn btn-danger" title="Delete post"><i class="bi bi-trash-fill"></i></a>
                            <form id="deletePost" action="{{ route('admin.posts.delete', $post->id) }}" method="post" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form></p>
                            <!-- List group with custom content -->
                            <ol class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold mb-2">Image</div>
                                        @if($post->image)
                                            <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" width="300px" height="200px">
                                        @else
                                            No Image
                                        @endif
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Title</div>
                                        {{ $post->title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Description</div>
                                        {{ $post->description }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Content</div>
                                        {!! $post->content !!}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Author</div>
                                        {{ $post->author->name }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Date</div>
                                       {{ $date->day }} {{ $date->translatedFormat('F') }}, {{ $date->year }}
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Status</div>
                                        @if($post->is_published)
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
