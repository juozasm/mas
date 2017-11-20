@extends('layout')

@section('title')
    {{ $orders['title']}}

@stop

@section('content')

    <h1>{{ $orders['title']}}</h1>

    <p>{{ $orders['info'] }}  </p>

@stop