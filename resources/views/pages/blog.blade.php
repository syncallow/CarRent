@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">
        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>{{ $page->title }}</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ route('index') }}">Home</a> <span class="mx-2">/</span> <strong>Blog</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="{{ route('blog.single', $post->id) }}">
                            <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                        </a>
                        <div class="post-entry-1-contents">

                            <h2><a href="{{ route('blog.single', $post->id) }}">{{ $post->title }}</a></h2>
                            <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($post->date)->isoFormat('MMMM Do, YYYY') }} <span class="mx-2">by</span> <a href="#">{{ $post->author->name }}</a></span>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {!! $posts->links('layouts.pagination') !!}

        </div>
    </div>

    @include('includes.propose')
@endsection
