@section('title')
    testas
@stop

@include('header')

<div class="container">

    <h1>Statistic</h1>

    <a class="btn btn-primary" href="{{ route('statistic.create') }}">New item</a><br /><br />

    <div class="row">
        <div class="col-md-12">
            <table class="table">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Count
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            @foreach ($statistics as $stat)
                <tr>
                    <td>
                        <a href="{{ route('statistic.show', $stat->id) }}">{{ $stat->title }}</a>
                    </td>
                    <td>
                        {{ $stat->count }}
                    </td>
                    <td>
                        <form action="{{ route('statistic.destroy', $stat->id) }}" class="float-right" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger">Delete</button>
                        </form>

                        <div class="float-right">
                            <a class="btn btn-default" href="{{ route('statistic.edit', $stat->id) }}">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>

    </div>


</div>

@include('footer')