@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pages</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Pages</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pages</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.pages.create') }}" class="btn btn-primary" title="Create page"><i class="bi bi-file-earmark-plus"></i></a></p>
                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $page->name }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>
                                        @if($page->is_published)
                                            <span class="badge rounded-pill bg-success">Published</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Not Published</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-info" title="Show page"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-success" title="Edit page"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    @endsection
