    <div class="loader">
      <div class="circle"></div>
      <div class="circle"></div>
    </div>

@extends('layouts.app')

@section('content')

<section class="homepg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

