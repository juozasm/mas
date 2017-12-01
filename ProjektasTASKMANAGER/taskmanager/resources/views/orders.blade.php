@extends('layout')

@section('title')
    Užsakymai

@stop

@section('content')


    <div class="table-responsive">

        <h2>Užsakymai</h2>
        <table class="table">
            <thead>
            <tr>
                <th>
                    Užsakymo nr.
                </th>
                <th>

                    Klientas

                </th>
                <th>
                    Vairuotojas
                </th>
                <th>
                    Užsakymo data
                </th>
                <th>
                    Užsakymo statusas
                </th>
                <th>
                    Užsakymo detalės
                </th>
            </tr>
            </thead>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}">{{ $order->order_number }}</a>
                    </td>
                    <td>

                        <a href="{{ route('clients.show', $order->client) }}">{{ $order->client }}</a>

                    </td>
                    <td>

                        <a href="{{ route('transport.show', $order->client) }}">{{ $order->driver_name }}
                            <p>
                                @isset($order->driver_name)
                                    Atvažiuoja: {{ $order->driver_arrives }}
                                @endisset
                            </p>
                        </a>

                    </td>
                    <td>
                        <p>{{ $order->start_date }}</p>
                    </td>
                    <th>
                        <p>{{ $order->status }}</p>
                    </th>
                    <th  @isset($order->status_description)class=" text-white bg-warning" >

                        @endisset
                        <p>{{ $order->status_description }}</p>
                    </th>
                    <td>
                        <form action="{{ route('orders.destroy', $order->id) }}" class="float-right" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        @if ($order->archives == 1)
                            <a class="btn btn-success" href="/orders/archive/{{$order->id}}/1">Išarchyvuoti</a>
                        @else
                            <a class="btn btn-warning" href="/orders/archive/{{$order->id}}/1">Archyvuoti</a>
                        @endif
                        <div class="float-right">
                            <a class="btn btn-default" href="{{ route('orders.edit', $order->id) }}">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <a class="btn btn-primary" href="{{ route('orders.create') }}">Naujas užsakymas</a><br/><br/>
    </div>

@stop