@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<form action="{{ route('posts.update') }}" method="POST">
    @csrf
    @method('POST')
    <input type="hidden" name="id" value="{{ $post['id'] }}">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $post['description'] }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection
