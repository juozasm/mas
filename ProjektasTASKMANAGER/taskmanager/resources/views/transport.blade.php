@extends('layout')

@section('title')
    {{ $transport['title']}}

@stop

@section('content')

    <h1>{{ $transport['title']}}</h1>

    <p>{{ $transport['info'] }}  </p>

@stop