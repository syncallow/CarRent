@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Promo Edit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Promo Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">

            <div class="row align-items-top">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ url()->previous() }}" title="Go back"><i class="bi bi-box-arrow-left fs-4"></i></a> Promo Edit</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.promo.update', $promo->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ $promo->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" style="height: 100px">{{ $promo->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="video_link" class="col-sm-2 col-form-label">Video Link</label>
                                    <div class="col-sm-10">
                                        <input name="video_link" type="text" class="form-control" value="{{ $promo->video_link }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        @if($promo->image)
                                            <div class="mb-2">
                                                <img src="{{ asset('/storage/' . $promo->image) }}" alt="{{ $promo->title }}">
                                            </div>
                                        @else
                                            <div class="mb-2">
                                                No Image
                                            </div>
                                        @endif
                                        <input class="form-control" type="file" id="image" name="image">
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
