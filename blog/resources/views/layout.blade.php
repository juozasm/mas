@include('header')

<div class="container">

    <div class="row">

        <div class="col-md-9">

            @yield('content')

        </div>
        <div class="col-md-3">

            @include('sidebar')

            @yield('sidebar')

        </div>
    </div>


</div>

@include('footer')