@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3 mt-3">{{ $post->title }}</h1>

    <div class="text mb-4"> {{ $post->body }}</div>

    <div class="d-flex">
        <a href="{{route('admin.posts.edit', Auth::id())}}" class="btn btn-primary mr-3">Edit</a>    
    
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')

            <input class="btn btn-danger" type="submit" value="Delete Product">
        </form>
    </div>
    

</div>
@endsection