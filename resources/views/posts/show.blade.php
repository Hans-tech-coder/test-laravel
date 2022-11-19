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
         <div style="padding-right: 15px;">
            <img src="/storage/{{$post->user->profile->image}}" 
                alt="profile image" 
                class="w-100 rounded-circle" 
                style="max-width: 50px">
         </div>
         <div>
            <div style="font-weight: 700">{{ $post->user->username }}</div>
         </div>
       </div>
       <hr>
       <p>
          <a href="/profile/{{ $post->user->id }}">
            <span style="font-weight: 700">{{ $post->user->username }}</span>
          </a> 
          {{ $post->caption }}
       </p>
    </div>
  </div>
  
  
 
</div>
@endsection
