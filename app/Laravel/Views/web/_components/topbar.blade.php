<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid position-relative">
    <a class="navbar-brand"><img src="{{ asset('assets/images/logo.png') }}" class="logo-topbar" alt="" srcset=""></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pb-3 pb-lg-0 justify-content-between" id="navbarSupportedContent">
      
        <ul class="navbar-nav mb-2 mb-lg-0 position-lg-absolute start-50 translate-middle-x-lg">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('web.home') ? 'active' : '' }}" 
                    @if(request()->routeIs('web.home')) aria-current="page" @endif 
                    href="{{ route('web.home') }}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('web.listing') ? 'active' : '' }}" 
                    @if(request()->routeIs('web.listing')) aria-current="page" @endif
                    href="{{ route('web.listing') }}">
                    Articles
                </a>
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
        <div class="d-flex">
            <!-- insert into href once user portal is done: route('portal.auth.register' -->
            <button class="btn btn-outline-primary" href="{{ route('portal.auth.register') }}">Sign Up</button>
        </div>
    </div>
  </div>
</nav>