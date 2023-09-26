@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add a page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create a new page</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.pages.index') }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Add a new page</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.pages.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title">
                                        @error('title')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2 col-form-label">Meta</div>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <label for="steps_title" class="form-label">Title</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title" value="">
                                            @error('meta_title')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="steps_desc" class="form-label">Desc</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="meta_description" id="meta_description" value="">
                                            @error('meta_description')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="content" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <textarea id="default-editor" name="text" class="form-control" style="height: 100px"></textarea>
                                        @error('text')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file" id="image">
                                        @error('image')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Publish Status</label>
                                    <div class="col-sm-10">
                                            <select name="is_published" class="form-select" aria-label="Default select example">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
