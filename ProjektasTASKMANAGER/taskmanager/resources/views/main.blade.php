@extends('layout')

@section('title')
    {!! $title !!}

@stop

@section('content')

    <h1>{!! $title !!}</h1>

    <h2>{{ $orders['title']}}</h2>
    <p>{{ $orders['info'] }}  </p>

    <h2>{{ $transport['title']}}</h2>
    <p>{{ $transport['info'] }}  </p>

    <h2>{{ $tasks['title']}}</h2>
    <p>{{ $tasks['info'] }}  </p>

@stop