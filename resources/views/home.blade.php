@extends('layouts.app')
@section('title')
    Dc-comics-laravel
@endsection
@section('content')
    <div class="jumbotron">
        <span class="current-series">CURRENT SERIES</span>
    </div>
    <div class="content">
        @include('partials.fumetti')
    </div>
    <div class="text-center">
        <button id="loadMore">LOAD MORE</button>
    </div>
@endsection
