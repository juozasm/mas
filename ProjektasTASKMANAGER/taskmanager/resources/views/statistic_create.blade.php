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
            <form method="post" action="{{ route('Statistic.store') }}" method="POST">
                {{ method_field('POST') }}
                {{ csrf_field() }}

                <div class="form-group col-md-12">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>

                <div class="form-group col-md-12">
                    <label for="count">Count:</label>
                    <input type="text" class="form-control" name="count" value="">
                </div>
                <div class=text-right>
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>

    </div>


</div>

@include('footer')