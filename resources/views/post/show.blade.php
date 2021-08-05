<div class="loader">
      <div class="circle"></div>
      <div class="circle"></div>
    </div>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="img-responsive" width="304" height="236"> 
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection



