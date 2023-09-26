@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <section class="section">
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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Micro's users</h5>
                    <p><a class="btn btn-success fs-5" title="Create a new user" href="{{ route('admin.user.create') }}"><i class="bx bxs-user-plus"></i></a></p>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Job</th>
                            <th scope="col">Additional</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td><a href="{{ route('admin.user.show', $user->id) }}">{{ $user->email }}</a></td>
                            <td>{{ $user->job }}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="p-1">
                                        <a class="btn btn-primary" href="{{ route('admin.user.show', $user->id) }}">View</a>
                                    </div>

                                    <div class="p-1">
                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </section>
    </main>
@endsection
