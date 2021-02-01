@extends('layouts.app')

@section('content')
<div class="container text-center">
   <h1>ERROR 404</h1>
   <p>Something's gone wrong :(</p>
   <p>Click <a href="{{ route('admin.home') }}">HERE</a> to return to Homepage.</p>
</div>
@endsection
