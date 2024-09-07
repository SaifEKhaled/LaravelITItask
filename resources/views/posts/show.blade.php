@extends('layouts.app')

@section('title', 'View Post')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ $post['title'] }}</h3>
    </div>
    <div class="card-body">
        <p>{{ $post['description'] }}</p>
    </div>
</div>
@endsection
