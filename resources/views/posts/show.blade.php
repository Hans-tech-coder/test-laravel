@extends('layouts.app')

@section('content')
<div class="container">
  <!-- This is a test to create a route that will SHOW -->
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{$post->image}}" class="w-100">
    </div>
    <div class="col-4">
      <h3>{{ $post->user->username }}</h3>
    </div>
  </div>
  
 
</div>
@endsection
