@extends('layouts.main')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('images/hero_1_a.jpg') }}');">
        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-12">

                    <div class="intro">
                        <h1><strong>{{ $post->title }}</strong></h1>
                        <div class="pb-4"><strong class="text-black">Posted on {{ \Carbon\Carbon::parse($post->date)->isoFormat('MMMM Do, YYYY')}} • By {{ $post->author->name }}</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">
                    {!! $post->content !!}
                    <div class="pt-5">
                        <h3 class="mb-5">{{ $post->comments->count() }} Comments</h3>
                        <ul class="comment-list">
                            @foreach($post->comments as $comment)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('/storage/' . $comment->author->profile_image) }}" alt="{{ $comment->author->name }}">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $comment->author->name }}</h3>
                                    <div class="meta">{{ \Carbon\Carbon::create($comment->created_at)->diffForHumans() }}</div>
                                    <p>{{ $comment->message }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->
                        @if(Auth::check())
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('comment.store') }}" method="post" class="">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                                </div>

                            </form>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        @if($post->author->profile_image)
                        <img src="{{ asset('/storage/' . $post->author->profile_image) }}" alt="{{ $post->author->name }}" class="img-fluid mb-4 w-50 rounded-circle">
                            <h3 class="text-black">About The Author</h3>
                        @else
                            <h3 class="text-black">{{ $post->author->name }}</h3>
                        @endif
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
