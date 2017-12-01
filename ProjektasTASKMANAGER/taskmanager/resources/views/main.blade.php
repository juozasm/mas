@extends('layout')

@section('title')
    {{ config('app.name') }}

@stop

@section('content')

    <div class="table-responsive" id="row_selector">

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
                <th>
                    Liko apmokėti
                </th>
            </tr>
            </thead>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}">{{ $order->order_number }}</a>
                    </td>
                    <td>

                        <a href="{{ route('orders.edit', $order->id) }}">{{ $order->client }}</a>

                    </td>
                    <td>

                        <a href="{{ route('transport.edit', $order->id) }}">@if (isset($order->driver_name)) @else Užsakyti transportą @endif
                            <p>
                                @isset($order->driver_name)
                                    Atvažiuoja: {{ $order->driver_arrives }}
                                @endisset

                            </p>
                        </a>

                    </td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}">{{ $order->start_date }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}">{{ $order->status }}
                        </a>

                    </td>
                    <a href="{{ route('orders.edit', $order->id) }}">

                    <td @isset($order->status_description)class="text-white bg-warning">

                        @endisset

                        <p>{{ $order->status_description }}</p>
                    </a>
                    </td>
                    @if($order->liko > 0)
                        <td class="text-white bg-danger">
                            <p >{{$order->liko}} Eur</p>
                    @else
                        <td class="text-white bg-success">
                            <p >Nieko mokėti nereikia</p>
                            @endif
                        </td>
                        <th>
                            <div>
                                <form style="text-align: center;" action="{{ route('orders.destroy', $order->id) }}" class="float-right" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button style="width:120px"  class="btn btn-danger">Delete</button>
                                </form>
                            </div>

                            <div style="text-align: center">
                                @if ($order->archives == 1)
                                    <a style="width:120px" class="btn btn-success" href="/orders/archive/{{$order->id}}/0">Išarchyvuoti</a>
                                @else
                                    <a style="width:120px" class="btn btn-warning" href="/orders/archive/{{$order->id}}/0">Archyvuoti</a>
                                @endif

                            </div>

                        </th>
                </tr>
            @endforeach
        </table>
        {{ $orders->links('vendor.pagination.bootstrap-4') }}
        <a class="btn btn-primary" href="{{ route('orders.create') }}">Naujas užsakymas</a><br/><br/>
    </div>





    <h2>Transportas</h2>
    <p>{{ $transports}} </p>
    {{ $transports->links('vendor.pagination.bootstrap-4') }}

    <h2>Užduotys</h2>
    <p>{{ $tasks }} </p>
    {{ $tasks->links('vendor.pagination.bootstrap-4') }}



@stop