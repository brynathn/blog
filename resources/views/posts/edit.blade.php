@extends('layouts.app')
@section('title', 'Blog | Edit Blog')
@section('content')

<h1>Create New Blog</h1>
<form action="{{url("posts/{$post->id}")}}" method="POST" class="form-control">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Blog Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post -> title}}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{$post -> content}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<form action="{{url("posts/$post->id")}}" method="POST" , class="form-control">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection