@section('sidebar')

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <span class="navbar-brand" >@guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endguest</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{$active['main']}}"><a class="nav-link" href="/">Pagrindinis</a></li>
                <li class="nav-item {{$active['orders']}}"><a class="nav-link" href="/orders">Užsakymai</a></li>
                <li class="nav-item {{$active['transport']}}"><a class="nav-link" href="/transport">Transportas</a></li>
                <li class="nav-item {{$active['tasks']}}"><a class="nav-link" href="/tasks">Užduotys</a></li>
                <li class="nav-item {{$active['config']}}"><a class="nav-link" href="/config">Nustatymai</a></li>
            </ul>

        </div>
    </nav>

@stop