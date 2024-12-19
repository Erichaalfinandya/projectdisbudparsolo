<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Solo Culinary App</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
            <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire {{ (request()->is('index')) ? 'active' : '' }}"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('blank') }}">Events</a></li>
                <li><a class="nav-link" href="{{ route('blank') }}">Foods</a></li>
                <li><a class="nav-link" href="{{ route('blank') }}">Categories</a></li>
                <li><a class="nav-link" href="{{ route('blank') }}">Locations</a></li>
                <li><a class="nav-link" href="{{ route('blank') }}">Reviews</a></li>
              </ul>
            </li>
          </div>
      </div>
