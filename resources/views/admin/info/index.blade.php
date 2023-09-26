@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Site Info</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Site Info</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section contact">
            @if(session('status'))
            <div class="mb-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            <div class="mb-4">
                <a class="btn btn-success" href="{{ route('admin.info.edit', $info->id) }}">Edit</a>
            </div>
            <div class="row gy-4">

                <div class="col-xl-12">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>{{ $info->address }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-telephone"></i>
                                <h3>Phone</h3>
                                <p>{{ $info->phone }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-envelope"></i>
                                <h3>Email </h3>
                                <p>{{ $info->email }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-image"></i>
                                <h3>Logo</h3>
                                <p>{{ $info->logo }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-facebook"></i>
                                <h3>Facebook link</h3>
                                <p>{{ $info->facebook_link }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-instagram"></i>
                                <h3>Instagram link</h3>
                                <p>{{ $info->instagram_link }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-twitter"></i>
                                <h3>Twitter link</h3>
                                <p>{{ $info->twitter_link }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="info-box card">
                                <i class="bi bi-linkedin"></i>
                                <h3>Linkedin link</h3>
                                <p>{{ $info->linkedin_link }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-box card">
                                <i class="bi bi-arrow-up-right-square"></i>
                                <h3>Steps title&desc</h3>
                                <h5>{{ $info->steps_title }}</h5>
                                <p>{{ $info->steps_desc }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-box card">
                                <i class="bx bxs-car pt-3 pb-3"></i>
                                <h3>Cars title&desc</h3>
                                <h5>{{ $info->cars_title }}</h5>
                                <p>{{ $info->cars_desc }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-box card">
                                <i class="bi bi-card-checklist"></i>
                                <h3>Features title&desc</h3>
                                <h5>{{ $info->features_title }}</h5>
                                <p>{{ $info->features_desc }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box card">
                                <i class="bi bi-file-earmark-text"></i>
                                <h3>Footer text</h3>
                                <p>{!!  $info->footer_text  !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box card">
                                <i class="bi bi-card-text"></i>
                                <h3>Copyright text</h3>
                                <p>{!! $info->copyright_text !!}</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>
@endsection
