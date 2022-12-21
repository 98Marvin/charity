<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{ route('welcome') }}" class="navbar-brand">Eliamor </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{ route('welcome') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                <a href="{{ route('causes') }}" class="nav-item nav-link {{ (request()->is('causes')) ? 'active' : '' }}">Causes</a>
                <a href="{{ route('events') }}" class="nav-item nav-link {{ (request()->is('events')) ? 'active' : '' }}">Events</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link {{ (request()->is('blog')) ? 'active' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Get Involved</a>
                    <div class="dropdown-menu">
                        <a href="service.html" class="dropdown-item">Corporate partnerships</a>
                        <a href="team.html" class="dropdown-item">Join Our Team</a>
                        <a href="{{ route('volunteer') }}" class="dropdown-item">Become A Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>