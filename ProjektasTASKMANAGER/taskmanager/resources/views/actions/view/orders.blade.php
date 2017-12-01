@section('title')
    {{ $current->order_number }}
@stop

@include('header')

<div class="container">

    <div class="row">
        <h1>{{ $current->order_number }}</h1>
    </div>

    <div class="row">

        <div class="col-md-12">

            Order number: <b>{{ $current->order_number }}</b>

            <form action="{{ route('Statistic.destroy', $current->id) }}" class="float-right" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-danger">Delete</button>
            </form>

            <div class="float-right">
                <a class="btn btn-default" href="{{ route('orders.edit', $current->id) }}">Edit</a>
            </div>
        </div>

    </div>


</div>

@include('footer')