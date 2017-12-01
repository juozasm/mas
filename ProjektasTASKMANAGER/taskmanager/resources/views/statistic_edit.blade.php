@section('title')
    Edit
@stop

@include('header')

<div class="container">

    <div class="row">
        <h1>Statistic</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <form method="post" action="{{ route('Statistic.update', $Statistic->id) }}" method="POST">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="form-group col-md-12">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="{{$Statistic->title}}">
                </div>

                <div class="form-group col-md-12">
                    <label for="count">Count:</label>
                    <input type="text" class="form-control" name="count" value="{{$Statistic->count}}">
                </div>
                <div class=text-right>
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

    </div>


</div>

@include('footer')