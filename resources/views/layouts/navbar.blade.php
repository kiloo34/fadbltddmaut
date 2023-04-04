<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                {{-- {{ auth()->user()->role_id == 1 ? auth()->user()->mantri->avatar : auth()->user()->holtikultura->avatar }} --}}
                <div class="d-sm-none d-lg-inline-block">
                    {{-- {{ auth()->user()->role_id == 1 ? auth()->user()->mantri->nama_depan : auth()->user()->holtikultura->nama_depan }} --}}
                    {{ auth()->user()->username }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                {{-- @if (auth()->user()->role_id ==2)
                <a href="{{ route('profil.index') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> {{__('Profil')}}
                </a>
                @endif --}}

                {{-- <a href="{{ auth()->user()->role_id == 1 ? route('admin.index') : route('holtikultura.index') }}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
