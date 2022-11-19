@extends('layouts.app')

@section('content')
<div class="container">
  <!-- This is a test to create a route that will SHOW -->
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{$post->image}}" class="w-100">
    </div>


    <div class="col-4">


       <div class="d-flex align-items-center">
         <div style="padding-right: 15px;"><img src="/storage/{{$post->user->profile->image}}" alt="profile image" class="w-100 rounded-circle" style="max-width: 50px"></div>
         <div><div style="font-weight: bold">{{ $post->user->username }}</div></div>
       </div>
       <hr>
       <p>{{ $post->caption }}</p>
    </div>
  </div>
  
  
 
</div>
@endsection
