@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3 mt-3">{{ $post->title }}</h1>

    <div class="text mb-4"> {{ $post->body }}</div>
    <a href="{{route('admin.posts.edit', Auth::id())}}" class="btn btn-primary">Edit</a>        

</div>
@endsection