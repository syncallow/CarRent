@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Features</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Features</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Features</h5>
                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <p><a href="{{ route('admin.features.create') }}" class="btn btn-primary" title="Add a new feature"><i class="bi bi-plus-square"></i></a></p>

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Features</h5>

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Feature</th>
                                                <th scope="col">Display</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($features as $feature)
                                            <tr>
                                                <th scope="row" style="font-family: icomoon;"><span class="{{ $feature->icon }} fs-2"></span></th>
                                                <td><a href="{{ route('admin.features.show', $feature->id) }}" class="text-primary fw-bold">{{ $feature->title }}</a></td>
                                                <td class="fw-bold">
                                                    @if($feature->is_published)
                                                        <span class="badge rounded-pill bg-success">Published</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-danger">Not Published</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.features.show', $feature->id) }}" class="btn btn-info" title="Show feature"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.features.edit', $feature->id) }}" class="btn btn-success" title="Edit feature"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="{{ route('admin.features.delete', $feature->id) }}" onclick="event.preventDefault(); document.getElementById('deleteFeature').submit(); " class="btn btn-danger" title="Delete feature"><i class="bi bi-trash-fill"></i></a>
                                                    <form id="deleteFeature" action="{{ route('admin.features.delete', $feature->id) }}" method="post" class="d-none">
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
