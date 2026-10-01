@extends('layouts.home')
@section('content')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Slate Blog!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
            <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ $featuredPost->image }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $featuredPost->created_at->format('M d, Y') }}</div>
                            <h2 class="card-title">{{ $featuredPost->title }}</h2>
                            <p class="card-text">{{ $featuredPost->content }}</p>
                            <a class="btn btn-primary" href="{{route('post-Individual', $featuredPost->id)}}">Read more →</a>
                        </div>
                    </div>
                 <!-- Nested row for non-featured blog posts-->
                        <div class="row">
                            @foreach($otherPosts as $post)
                                <div class="col-lg-6">
                                    <!-- Blog post-->
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="{{ $post->image }}" alt="..." /></a>
                                        <div class="card-body">
                                            <div class="small text-muted">{{ $post->created_at->format('M d, Y') }}</div>
                                            <h2 class="card-title h4">{{ $post->title }}</h2>
                                            <p class="card-text">{{ $post->content }}</p>
                                            <a class="btn btn-primary" href="{{route('post-Individual', $post->id)}}">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{$otherPosts->links()}}
        
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                   
                                    <!-- Categories widget-->
                    <div class="card mb-4 sticky-top" style="top: 2rem;">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                {{-- Split the categories into 2 equal chunks --}}
                                @foreach($categories->split(2) as $chunk)
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            {{-- Loop through the categories within this chunk --}}
                                            @foreach($chunk as $category)
                                                {{-- Replace 'name' with your actual database column name if different --}}
                                                <li><a href="#!">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
            </div>
        </div>
@endsection
