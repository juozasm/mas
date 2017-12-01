@section('title')
    Edit
@stop

@include('header')

<div class="container">

    <div class="row">
        <h1>Orders</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <form method="post" action="{{ route('orders.store') }}" method="POST">
                {{ method_field('POST') }}
                {{ csrf_field() }}

                <div class="form-group col-md-12">
                    <label for="title">Užsakymo nr:</label>
                    <input type="text" class="form-control" name="order_number" value="">
                </div>

                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>

    </div>


</div>

@include('footer')