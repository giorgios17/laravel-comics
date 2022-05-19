@extends('layouts.app')
@section('title')
    Dc-comics-laravel
@endsection
@section('content')
    <div class="content">
        @include('partials.fumetti')
    </div>
    <div class="text-center">
        <button id="loadMore">LOAD MORE</button>
    </div>
@endsection
@section('currentseries')
    <span class="current-series">CURRENT SERIES</span>
@endsection
