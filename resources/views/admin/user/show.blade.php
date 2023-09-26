@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset('/storage/' . $user->profile_image) }}" alt="{{ $user->name }}" class="rounded-circle" width="100px" height="100px">
                            <h2>{{ $user->name }}</h2>
                            <h3>{{ $user->job }}</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
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
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab" tabindex="-1">Overview</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" role="tab">Edit Profile</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->name}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->company }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->job }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->country }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('admin.user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="collapse multi-collapse show" id="profile_image_preview">
                                                    <img src="{{ asset('/storage/' . $user->profile_image) }}" alt="{{ $user->name }}" id="profile_image_preview" width="100px" height="100px">
                                                </div>
                                                <div class="pt-2">
                                                    <a class="btn btn-primary btn-sm" title="Upload new profile image" data-bs-toggle="collapse" href="#profile_image" role="button" aria-expanded="false" aria-controls="profile_image"><i class="bi bi-upload"></i></a>
                                                    <a href="#profile_image_preview" onclick="event.preventDefault(); this.remove(); document.getElementById('profile_image_delete').value = true" class="btn btn-danger btn-sm" title="Remove my profile image" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="profile_image_preview" id="#del-profile-img"><i class="bi bi-trash"></i></a>
                                                </div>
                                                <div class="pt-2 collapse multi-collapse" id="profile_image">
                                                    <input class="form-control" type="file" name="profile_image">
                                                    <input type="hidden" name="profile_image_delete" id="profile_image_delete">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName" value="{{ $user->name }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company" value="{{ $user->company }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control" id="Job" value="{{ $user->job }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control" id="Country" value="{{ $user->country }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address" value="{{ $user->address }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone" value="{{ $user->phone }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select role</label>
                                            <div class="col-sm-10">
                                                <select name="role" class="form-select" aria-label="Default select example">
                                                    @foreach($roles as $id => $role)
                                                        <option value="{{ $id }}" {{ $id == $user->role ? 'selected' : '' }}>{{ $role }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}" disabled>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                    <!-- Change Password Form -->
                                    <form action="{{ route('admin.user.change.password', $user->id) }}" method="post">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="old_password" type="password" class="form-control" id="currentPassword" required>
                                                @error('old_password')
                                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password" type="password" class="form-control" id="newPassword" required>
                                                @error('new_password')
                                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password_confirmation" type="password" class="form-control" id="renewPassword" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
