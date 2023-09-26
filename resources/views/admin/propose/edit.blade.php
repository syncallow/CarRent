@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Propose Edit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Propose Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">

            <div class="row align-items-top">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Propose Edit</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.propose.update', $propose->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ $propose->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" style="height: 100px">{{ $propose->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Publish Status</label>
                                    <div class="col-sm-10">
                                        <select name="is_published" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $propose->is_published ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ !$propose->is_published ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
