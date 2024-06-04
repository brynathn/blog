@extends('layouts.app')
@section('title','Blog')

@section('content')
<h1>Blog Bryan
    <a class="btn btn-success" href="{{url('posts/create')}}">+ Create Blog</a>
</h1>
@foreach ($posts as $post)
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <p class="card-text"><small class="text-body-secondary">Last updated at {{date("d Y M H:i", strtotime($post->created_at))}}</small></p>
        <a href="{{url("posts/{$post->id}")}}" class="btn btn-primary">More</a>
        <a href="{{url("posts/{$post->id}")}}/edit" class="btn btn-warning">Update</a>
    </div>
</div>
@endforeach
@endsection