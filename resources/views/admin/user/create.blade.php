@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <section class="section profile">
            <div class="row justify-content-center">
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body">
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Bordered Tabs -->
                            <div class="tab-content">
                                <h5 class="card-title">Create a new user</h5>
                                <div class="pt-3">

                                    <!-- Profile Edit Form -->
                                    <form class="row g-3 needs-validation" action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" value="{{ old('email') }}" required>
                                                @error('email')
                                                <span class="badge bg-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <span class="badge bg-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control" id="password" required>
                                                @error('password')
                                                    <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">Confirm password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control" id="password" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" type="file" name="profile_image" id="profileImage">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company" value="{{ old('company') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control" id="Job" value="{{ old('job') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="Country" value="{{ old('country') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address" value="{{ old('address') }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label">Select role</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="role" class="form-select" aria-label="Default select example">
                                                    @foreach($roles as $id => $role)
                                                    <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>{{ $role }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Create User</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
