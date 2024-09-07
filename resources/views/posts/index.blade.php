@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<div class="container mt-4">
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create Post</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['description'] }}</td>
                <td>
                    <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection