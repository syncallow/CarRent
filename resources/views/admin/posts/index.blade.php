@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Posts</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.posts.create') }}" class="btn btn-primary" title="Add a new post"><i class="bi bi-plus-square"></i></a></p>

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Posts</h5>

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Display</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                            <tr>
                                                <th scope="row"><a href="#"><img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" height="60px" width="90px"></a></th>
                                                <td><a href="{{ route('admin.posts.show', $post->id) }}" class="text-primary fw-bold">{{ $post->title }}</a></td>
                                                <td>{{ $post->author->name}}</td>
                                                <td class="fw-bold">
                                                    @if($post->is_published)
                                                        <span class="badge rounded-pill bg-success">Published</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-danger">Not Published</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info" title="Show post"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success" title="Edit post"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('admin.posts.delete', $post->id) }}" onclick="event.preventDefault(); document.getElementById('deletePost').submit(); " class="btn btn-danger" title="Delete post"><i class="bi bi-trash-fill"></i></a>
                                                    <form id="deletePost" action="{{ route('admin.posts.delete', $post->id) }}" method="post" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        <div>
                                            {!! $posts->links('admin.pagination.custom') !!}
                                        </div>
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
