@section('title')
    {{ $statistic->title }}
@stop

@include('header')

<div class="container">

    <div class="row">
        <h1>{{ $statistic->title }}</h1>
    </div>

    <div class="row">

        <div class="col-md-12">
            Count: <b>{{ $statistic->count }}</b>

            <form action="{{ route('statistic.destroy', $statistic->id) }}" class="float-right" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-danger">Delete</button>
            </form>

            <div class="float-right">
                <a class="btn btn-default" href="{{ route('statistic.edit', $statistic->id) }}">Edit</a>
            </div>
        </div>

    </div>


</div>

@include('footer')