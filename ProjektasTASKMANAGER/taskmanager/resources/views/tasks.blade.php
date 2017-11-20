@extends('layout')

@section('title')
    {{ $tasks['title']}}

@stop

@section('content')

    <h1>{{ $tasks['title']}}</h1>

    <p>{{ $tasks['info'] }}  </p>

@stop