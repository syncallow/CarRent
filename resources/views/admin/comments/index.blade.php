@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Comments</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Comments</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Comments</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Comments</h5>

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Post</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comments as $comment)
                                            <tr>
                                                <th scope="row">{{ $comment->post->title }}</th>
                                                <td>{{ $comment->message }}</td>
                                                <td class="fw-bold">
                                                    {{ $comment->author->name }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-success" title="Edit comment"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('admin.comments.delete', $comment->id) }}" onclick="event.preventDefault(); document.getElementById('deleteComment').submit(); " class="btn btn-danger" title="Delete comment"><i class="bi bi-trash-fill"></i></a>
                                                    <form id="deleteComment" action="{{ route('admin.comments.delete', $comment->id) }}" method="post" class="d-none">
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
