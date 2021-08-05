<div class="loader">
      <div class="circle"></div>
      <div class="circle"></div>
    </div> 
@extends('layouts.app')
@section('content')

<section class="createpg">
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="postpic">Post a picture</label>
                        <input type="file" name="postpic" id="postpic">
                    </div>

                    <div class="form-group row">
                        <label for="caption">Caption</label>
                        <input class="form-control" type="text" name="caption" id="caption">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Post!</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</section>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection




