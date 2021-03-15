<nav
class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
data-aos="fade-down"
>
<div class="container-fluid">
    <button
    class="btn btn-secondary d-md-none mr-auto mr-2"
    id="menu-toggle"
    >
    &laquo; Menu
    </button>
    <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    >
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @auth
        <!-- desktop -->
        <ul class="navbar-nav d-none d-lg-flex ml-auto">
            <li class="nav-item dropdown">
            <a
                href="#"
                class="nav-link text-white"
                role="button"
                id="navbarDropdown"
                data-toggle="dropdown"
            >
                <img
                src="/images/icon-user.png"
                alt="profile"
                class="rounded-circle mr-2 profile-picture"
                />
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                {{-- <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class="dropdown-item">Logout</a> --}}
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                @csrf
                </form> --}}
                <a href="{{ route('logout') }}" class="dropdown-item">logout</a>
            </div>
            </li>

        </ul>
        <!-- mobile -->
        <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
            <a href="#" class="nav-link">Hi, {{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="nav-link">logout</a>
            </li>

        </ul>
    @endauth
    </div>
</div>
</nav>
