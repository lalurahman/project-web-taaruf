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
    <!-- desktop -->
    <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
        <a
            href="#"
            class="nav-link"
            role="button"
            id="navbarDropdown"
            data-toggle="dropdown"
        >
            <img
            src="/images/icon-user.png"
            alt="profile"
            class="rounded-circle mr-2 profile-picture"
            />
            Lalu Abdurrahman
        </a>
        <div class="dropdown-menu">
            <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" 
            class="dropdown-item">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
        </li>
        
    </ul>
    <!-- mobile -->
    <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
        <a href="#" class="nav-link">Hi, Lalu Abdurrahman</a>
        </li>
        
    </ul>
    </div>
</div>
</nav>