@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Your Posts</h1>

   @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }} Successfully deleted
        </div>
   @endif

   {{-- Metodo di blade isEmpty per capire se ha o no entità --}}
   @if ($posts->isEmpty())
        <p>No posts yet.</p>
   @else
       {{-- Post Table --}}

       <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('l, d/m/Y') }}</td>

                        <td>
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-success">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            {{-- FORM --}}
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                        
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>



       </table>



   @endif

</div>
@endsection
