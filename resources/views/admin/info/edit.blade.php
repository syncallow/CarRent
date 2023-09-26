@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Site Info</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item">Site Info</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('admin.info.index') }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Edit Site Info</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.info.update', $info->id) }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="logo" value="{{ $info->logo }}">
                                        @error('logo')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" value="{{ $info->address }}">
                                        @error('address')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" value="{{ $info->phone }}">
                                        @error('phone')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="{{ $info->email }}">
                                        @error('email')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="facebook_link" class="col-sm-2 col-form-label">Facebook link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="facebook_link" value="{{ $info->facebook_link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="instagram_link" class="col-sm-2 col-form-label">Instagram link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="instagram_link" value="{{ $info->instagram_link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="twitter_link" class="col-sm-2 col-form-label">Twitter link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="twitter_link" value="{{ $info->twitter_link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="linkedin_link" class="col-sm-2 col-form-label">Linkedin link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="linkedin_link" value="{{ $info->linkedin_link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2 col-form-label">Steps Title & Desc</div>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <label for="steps_title" class="form-label">Title</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="steps_title" id="steps_title" value="{{ $info->steps_title }}">
                                            @error('steps_title')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="steps_desc" class="form-label">Desc</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="steps_desc" id="steps_desc" value="{{ $info->steps_desc }}">
                                            @error('steps_desc')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2 col-form-label">Cars Title & Desc</div>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <label for="cars_title" class="form-label">Title</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="cars_title" id="cars_title" value="{{ $info->cars_title }}">
                                            @error('cars_title')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="cars_desc" class="form-label">Desc</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="cars_desc" id="cars_desc" value="{{ $info->cars_desc }}">
                                            @error('cars_desc')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-2 col-form-label">Features Title & Desc</div>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <label for="features_title" class="form-label">Title</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="features_title" id="features_title" value="{{ $info->features_title }}">
                                            @error('features_title')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <label for="features_desc" class="form-label">Desc</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="features_desc" id="features_desc" value="{{ $info->features_desc }}">
                                            @error('features_desc')
                                            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="content" class="col-sm-2 col-form-label">Footer text</label>
                                    <div class="col-sm-10">
                                        <textarea id="default-editor" name="footer_text" class="form-control" style="height: 100px">{{ $info->footer_text }}</textarea>
                                        @error('footer_text')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="copyright_text" class="col-sm-2 col-form-label">Copyright text</label>
                                    <div class="col-sm-10">
                                        <textarea id="default-editor" name="copyright_text" class="form-control" style="height: 100px">{{ $info->copyright_text }}</textarea>
                                        @error('copyright_text')
                                        <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                        @enderror
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
