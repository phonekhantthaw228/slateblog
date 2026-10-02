@extends('layouts.post') 

@section('content') 
<!-- Page content--> 
<div class="container mt-5"> 
    <div class="row"> 
        <div class="col-12"> 
            <!-- Post content--> 
            <article> 
                <!-- Post header--> 
                <header class="mb-4 text-center"> 
                    <h1 class="fw-bolder mb-1">{{ $post->title }}</h1> 
                    <div class="text-muted fst-italic mb-2"> 
                        Posted on {{ $post->created_at->format('F d, Y') }} 
                    </div> 
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!"></a> 
                </header> 
                
                <figure class="mb-4"> 
                    <img class="img-fluid w-100 rounded" src="{{ $post->image }}" alt="..." /> 
                </figure> 
                
                <section class="mb-5"> 
                    <p class="fs-5 mb-4">{{ $post->content }}</p> 
                </section> 
            </article> 
            
            <!-- Related Posts Section --> 
            <hr> 
            <h3 class="fw-bolder mb-4 mt-5">Related Posts</h3> 
            <div class="row"> 
                @foreach($related_posts as $related) 
                    <div class="col-md-6 mb-4"> 
                        <div class="card h-100"> 
                            <a href="{{ route('post-Individual', $related->id) }}"> 
                                <img class="card-img-top" src="{{ $related->image }}" alt="{{ $related->title }}" /> 
                            </a> 
                            <div class="card-body"> 
                                <h4 class="card-title h5">{{ $related->title }}</h4> 
                                <a class="btn btn-outline-primary btn-sm mt-2" href="{{ route('post-Individual', $related->id) }}">Read more →</a> 
                            </div> 
                        </div> 
                    </div> 
                @endforeach 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
