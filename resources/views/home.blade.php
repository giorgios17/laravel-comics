@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <span class="current-series">CURRENT SERIES</span>
    </div>
    <div class="content">
        @include('fumetti')
    </div>
    <div class="text-center">
        <button id="loadMore">LOAD MORE</button>
    </div>
@endsection
