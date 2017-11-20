@extends('layout')

@section('title')
    {{ $config['title']}}

@stop

@section('content')

    <h1>{{ $config['title']}}</h1>

    <p>{{ $config['info'] }}  </p>

@stop