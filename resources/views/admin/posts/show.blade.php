@extends('layouts.app')
@section('content')

<div class="container">

 <div class="card text-center">  
    <div class="card-header">
      {{$post->title}}
     </div>
     <div class="card-body">
      <h5 class="card-title">{{$post->slug}}</h5>
      <p class="card-text">{{$post->content}}</p>
      
     </div>
     <div class="card-footer text-muted">
         2 days ago
     </div>
  </div>
  <div class="mt-4">
      <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna Indietro</a>
  </div>

</div>

@endsection