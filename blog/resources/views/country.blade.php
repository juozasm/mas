@section('title')
    {{ $title }}
@stop

@include('header')

<div class="container country">

    <div class="row bigPhoto" style="background-image: url('/img/{{$slug}}.jpg')">
            <h1>{{ $title }}</h1>
        </div>

        <div class="row">

        <div class="col-md-9">

            <p>{{ $continent }} </p>


        </div>
        <div class="col-md-3">

            <ul class="list-group">
                <li class="list-group-item active">Information</li>
                <li class="list-group-item"><small>Capital</small> <b>{{ 1 }}</b></li>
                <li class="list-group-item"><small>Area</small> <b>{{ number_format(1) }} km<sup>2</sup></b></li>
                <li class="list-group-item"><small>Population</small> <b>{{ number_format(1) }}</b></li>
            </ul>

        </div>
    </div>


</div>

@include('footer')