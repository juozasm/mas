@extends('layout')
@section('title')
    Edit
@stop

@include('header')
@section('content')
    <div class="container">

        <div class="row">
            <h1>Orders</h1>

        </div>

        <div class="row">

            <div class="col-md-4">

                <form method="post" action="{{ route('orders.update', $current->id) }}" method="POST">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group col-md-12">

                        <label for="user_id">Pardavėjas:</label>
                        <select class="form-control" name="user_id">

                            @foreach($allUsers as $users)
                                <option value="{{$users->user_id}}"
                                        @if($current->user_id==$users->user_id)
                                        selected="selected" ;
                                        @endif
                                >{{$users->user_name}}</option>
                            @endforeach

                        </select>

                        <label for="order_number">Užsakymo nr.:</label>
                        <input type="text" class="form-control" name="order_number" value="{{$current->order_number}}">

                        <label for="client_id">Klientas:</label>

                        <select class="form-control" name="client_id">

                            @foreach($clients as $client)
                                <option value="{{$client->id}}"
                                        @isset($current->client_id)
                                        @if ($current->client_id==$client->id)
                                        selected="selected" ;
                                        @endif
                                        @endisset
                                >{{$client->name}}</option>
                            @endforeach

                        </select>
                        @if (isset($current->transport_id))
                            <label for="transport_name">Transportas</label>
                            <input class="form-control" id="disabledInput" type="text"
                                   @foreach($transports as $transport)
                            @if($current->transport_id==$transport->id)
                            placeholder="{{$transport->driver_name}}, atvažiuoja: {{ $transport->driver_arrives }}">
                            <p><a href="{{ route('transport.edit',$current->transport_id) }}">Koreguoti transportą</a></p>
                            @endif
                            @endforeach
                        @else
                            <p><a href="{{ route('transport.create') }}">Užsakyti transportą</a></p>
                        @endif


                        <label for="status_id">Statusas</label>
                        <select class="form-control" name="status_id">

                            @foreach($statuses as $status)
                                <option value="{{$status->id}}"
                                        @isset($current->status_id)
                                        @if ($current->status_id==$status->id)
                                        selected="selected" ;
                                        @endif
                                        @endisset
                                >{{$status->status}}</option>
                            @endforeach

                        </select>
                        <div class="card text-white bg-warning">
                            <div class="card-body">

                                <blockquote class="card-blockquote">
                                    <p>@foreach($statuses as $status)
                                            @isset($current->status_id)
                                                @if ($current->status_id==$status->id)
                                                    {{$status->status_description}}
                                                @endif
                                            @endisset
                                        @endforeach</p>
                                </blockquote>
                            </div>
                        </div>

                        <label for="start_date">Pradėta</label>
                        <input type="text" class="form-control" name="start_date" value="{{$current->start_date}}">

                        <label for="planned_end_date">Planuojama pabaigti</label>
                        <input type="text" class="form-control" name="planned_end_date"
                               value="{{$current->planned_end_date}}">

                        <label for="order_sum">Suma</label>
                        <input type="text" class="form-control" name="order_sum" value="{{$current->order_sum}}">

                        <label for="order_sum">Apmokėta</label>
                        <input type="text" class="form-control" name="order_sum_paid"
                               value="{{$current->order_sum_paid}}">



                        <textarea rows="4" cols="50" name='notes' placeholder="{{$current->notes}}">{{$current->notes}}</textarea>

                    </div>
                    <button class="btn btn-primary float-right">Update</button>
                </form>
                <form class="float-left" action="{{ route('orders.destroy', $current->id) }}" class="float-right" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-danger ">Delete</button>
                </form>
                <div class="float-left">
                    @if ($current->archives == 1)
                        <a class="btn btn-success" href="/orders/archive/{{$current->id}}/0">Išarchyvuoti</a>
                    @else
                        <a class="btn btn-warning" href="/orders/archive/{{$current->id}}/0">Archyvuoti</a>
                    @endif

            </div>

            </div>
        </div>


    </div>
@stop
@include('footer')