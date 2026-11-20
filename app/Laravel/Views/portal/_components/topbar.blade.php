<nav class="navbar navbar-expand-lg bg-body-secondary shadow-sm admin-topbar">
  <div class="container-fluid px-3">
    <button type="button"
                class="btn btn-sm text-white sidebar-toggle"
                onclick="toggleSidebar()"
                aria-label="Toggle sidebar">
            ☰
        </button>
    <img src="{{ asset('assets/images/logo2.png') }}"
                 class="sidebar-logo"
                 alt="Folio logo">

    <div class="ms-auto d-flex align-items-center gap-3">
        <span class="text-light">
            Folio Admin Panel
        </span>
    </div>
<!--     
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pb-3 pb-lg-0" id="navbarSupportedContent">
      
      <ul class="navbar-nav mb-2 mb-lg-0 position-lg-absolute start-50 translate-middle-x-lg">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('web.home') ? 'active' : '' }}" 
             @if(request()->routeIs('web.home')) aria-current="page" @endif 
             href="{{ route('web.home') }}">
             Home
            </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->routeIs('web.listing', 'web.create') ? 'active' : '' }}" 
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Article
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item {{ request()->routeIs('web.listing') ? 'active' : '' }}" 
                 href="{{ route('web.listing') }}">
                 Articles
                </a>
            </li>
            
            <li>
              <a class="dropdown-item {{ request()->routeIs('web.create') ? 'active' : '' }}" 
                 href="{{ route('web.create') }}">
                 Create
                </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('web.about') ? 'active' : '' }}" 
             @if(request()->routeIs('web.about')) aria-current="page" @endif 
             href="{{ route('web.about') }}">
             About Us
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('web.contact') ? 'active' : '' }}" 
             @if(request()->routeIs('web.contact')) aria-current="page" @endif 
             href="{{ route('web.contact') }}">
             Contact Us
            </a>
        </li>
      </ul>
    </div> -->
  </div>
</nav>