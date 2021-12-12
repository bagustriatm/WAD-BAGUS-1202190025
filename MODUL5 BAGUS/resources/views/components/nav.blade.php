
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Vaccine") ? 'active' : '' }}" href="{{ route('vaccine') }}">VACCINE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Patient" or $title ==='Add Patient') ? 'active' : '' }}" href="/patient">PATIENT</a>
            </li>
        </ul>
    </div>
</nav>

