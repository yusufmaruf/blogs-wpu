@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{$post->title}}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none"> {{$post->category->name}} </a></p>
                @if ($post->image)
                <div style="max-height: 300px;  overflow:hidden;">
                   <img src="{{asset('storage/' . $post->image)}}" class="card-img-top" alt="{{$post->category->name}}">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="...">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article> 
                    <a href="/posts" class="text-decoration-none d-block mt-3">Back To Posts</a>

            </div>
        </div>
    </div>

@endsection