@extends('layouts.app')

@section('content')
<div class="container">
   <h1>BLOG</h1>

   {{-- Metodo di blade isEmpty per capire se ha o no entità --}}
   @if ($posts->isEmpty())
        <p>No posts yet.</p>
   @else
        @foreach ($posts as $post)
            <article class="mb-4">
                <h2>{{ $post->title }}</h2>
                <div class="info">
                    By {{ $post->user->name }}
                    <div class="date">{{ $post->updated_at->diffForHumans() }}</div>
                </div>
                <a href="{{ route('posts.show', $post->slug) }}">Read More</a>
            </article>
        @endforeach
   @endif

    <div class="pagination justify-content-center">
        {{ $posts->links() }}
    </div>

</div>
@endsection
