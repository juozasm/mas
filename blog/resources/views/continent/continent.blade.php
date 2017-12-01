@extends('layout')

@section('title')
    {{ $continent->title }}
@stop

@section('content')

   <h1>{{ $continent->title }}</h1>

   <div class="row">
       <div class="col-lg-12">
           {{ $continent->description }}
       </div>
   </div>

   <div class="row">
       <div class="col-lg-12">
            @foreach ($countries as $country)
                {{ $country->title }} <br />
            @endforeach
       </div>
   </div>

   <div class="row">

       {{ $countries->links('vendor.pagination.bootstrap-4') }}

   </div>

@stop