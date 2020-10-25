<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Code Buddy</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#responsive-navbar-nav"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="responsive-navbar-nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/explore">Explore</a>
            </li>
        </ul>
        @guest
        <div class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-link mr-1" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white btn btn-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif

        </div>
        @else

        <div class="navbar-nav">
            <div class="nav-item dropdown ">
                <a class="nav-link " href="#" href="#" id="dropdownId" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="notification-icon fa fa-envelope">
                        <span class="badge badge-danger">11</span>
                    </i>

                </a>

                <div class="dropdown-menu position-dropdown" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">message from user djole</a>
                    <a class="dropdown-item" href="#">get promo code</a>
                    <a class="dropdown-item" href="#">you are called to team</a>
                </div>
            </div>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="d-inline-block mr-1" style="width: 2em; height: 2em;">
                        <img class="mr-1 border img-fluid rounded-circle" src="/uploads/avatars/{{$user->avatar}}"
                            alt="avatar user">
                    </span>
                    <span>{{ Auth::user()->name }}</span>

                </a>

                <div class="dropdown-menu position-dropdown" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="#">Messages</a>
                    <a class="dropdown-item" href="#">Projects</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
        @endguest
    </div>
</nav>