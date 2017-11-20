@section('sidebar')
    <div class="sidebar">
        <div class="login">
            <form class="form">
                <input class="form-control mr-sm-1" type="text" placeholder="Username">
                <input class="form-control mr-sm-1" type="password" placeholder="Password">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Prisijungti</button>

            </form>
        </div>

        <nav class="horizontal">
            <ul class="list-group">
                <li class="list-group-item {{$active['main']}}"><a href="/">Pagrindinis</a></li>
                <li class="list-group-item {{$active['orders']}}"><a href="orders">Užsakymai</a></li>
                <li class="list-group-item {{$active['transport']}}"><a href="transport">Transportas</a></li>
                <li class="list-group-item {{$active['tasks']}}"><a href="tasks">Užduotys</a></li>
                <li class="list-group-item {{$active['config']}}"><a href="config">Nustatymai</a></li>

            </ul>
        </nav>
    </div>
@stop