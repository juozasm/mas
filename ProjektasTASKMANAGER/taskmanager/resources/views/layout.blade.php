@include('header')

@include('sidebar')

@yield('sidebar')


<div class="container-fluid">


    <div class="row">


        <div class="col-md-12">

            @yield('content')

        </div>

    </div>


</div>

@include('footer')