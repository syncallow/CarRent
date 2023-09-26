@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add a new feature</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add a new feature</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add a new feature</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.features.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" style="height: 100px">{{ old('description') }}</textarea>
                                        @error('description')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <select name="icon" class="form-select feature-ico" aria-label="select">
                                            <option value="icon-home" {{ old('icon') == 'icon-home' ? 'selected' : '' }}>&#xf015; icon-home</option>
                                            <option value="icon-gear" {{ old('icon') == 'icon-gear' ? 'selected' : '' }}>&#xf013; icon-gear</option>
                                            <option value="icon-watch_later" {{ old('icon') == 'icon-watch_later' ? 'selected' : '' }}>&#xf017; icon-watch_later</option>
                                            <option value="icon-verified_user" {{ old('icon') == 'icon-verified_user' ? 'selected' : '' }}>&#xf058; icon-verified_user</option>
                                            <option value="icon-video_library" {{ old('icon') == 'icon-video_library' ? 'selected' : '' }}>&#xf144; icon-video_library</option>
                                            <option value="icon-vpn_key" {{ old('icon') == 'icon-vpn_key' ? 'selected' : '' }}>&#xf084; icon-vpn_key</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Publish Status</label>
                                    <div class="col-sm-10">
                                            <select name="is_published" class="form-select" aria-label="select">
                                                <option value="1" {{ old('is_published') == 1 ? 'selected' : '' }} selected>Yes</option>
                                                <option value="0" {{ old('is_published') == 0 ? 'selected' : '' }}>No</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add</button>
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
