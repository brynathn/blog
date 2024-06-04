@extends('layouts.app')
@section('title','Blog | Create Blog')
@section('content')
<h1>Update Blog</h1>
<form action="{{url('posts')}}" method="POST" class="form-control">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Blog Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection