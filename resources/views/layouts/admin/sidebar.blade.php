<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('public/back/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('public/back/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="{{ (request()->is('admin/sponsors')) ? 'active' : '' }}">
                    <a href="{{ route('sponsors.index') }}"> <i class="menu-icon fa fa-users"></i>Sponsors</a>
                </li>
                <li class="{{ (request()->is('admin/donations')) ? 'active' : '' }}">
                    <a href="{{ route('donations') }}"> <i class="menu-icon fa fa-money"></i>Donations</a>
                </li>
                <li class="{{ (request()->is('admin/volunteers')) ? 'active' : '' }}"> 
                    <a href="{{ route('volunteers.index') }}"> <i class="menu-icon fa fa-money"></i>Volunteers</a>
                </li>
                <li class="{{ (request()->is('admin/causes')) ? 'active' : '' }}">
                    <a href="{{ route('causes.index') }}" class="{{ (request()->is('blog')) ? 'active' : '' }}"> <i class="menu-icon fa fa-file"></i>Causes</a>
                </li>
                <li class="{{ (request()->is('admin/events')) ? 'active' : '' }}">
                    <a href="{{ route('events.index') }}" class="{{ (request()->is('blog')) ? 'active' : '' }}"> <i class="menu-icon fa fa-tasks"></i>Events</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->