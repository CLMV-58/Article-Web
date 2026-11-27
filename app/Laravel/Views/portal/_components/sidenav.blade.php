<nav class="sidebar bg-primary">
    <ul class="nav flex-column gap-1 px-2 py-3 flex-grow-1">

        <li>
            <a class="nav-link rounded {{ request()->routeIs('portal.profile.index') ? 'active' : '' }}"
               href="{{ route('portal.profile.index') }}">
                <img src="{{ asset('assets/images/SNavP.png') }}" class="sidebar-icon">
                <span class="label">
                    Profile
                </span>
            </a>
        </li>

        <hr class="borber border-tertiary border-3">
      
        <li>
            <a class="nav-link rounded {{ request()->routeIs('portal.cms.home') ? 'active' : '' }}"
            href="{{ route('portal.cms.home') }}">
                <img src="{{ asset('assets/images/SNavCMS.png') }}" class="sidebar-icon">
                <span class="label">
                    Home
                </span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded {{ request()->routeIs('portal.cms.articles') ? 'active' : '' }}"
            href="{{ route('portal.cms.articles') }}">
                <img src="{{ asset('assets/images/SNavCMS.png') }}" class="sidebar-icon">
                <span class="label">
                    Articles
                </span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded {{ request()->routeIs('portal.cms.about') ? 'active' : '' }}"
            href="{{ route('portal.cms.about') }}">
                <img src="{{ asset('assets/images/SNavCMS.png') }}" class="sidebar-icon">
                <span class="label">
                    About us
                </span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded {{ request()->routeIs('portal.cms.contact') ? 'active' : '' }}"
            href="{{ route('portal.cms.contact') }}">
                <img src="{{ asset('assets/images/SNavCMS.png') }}" class="sidebar-icon">
                <span class="label">
                    Contact page
                </span>
            </a>
        </li>

    </ul>

    <!-- Logout -->
    <ul class="nav flex-column px-2 py-3 nav-logout">
        <li>
            <a class="nav-link rounded"
            href="{{ route('portal.logout') }}">
                <img src="{{ asset('assets/images/SNavLO.png') }}" class="sidebar-icon">
                <span class="label">
                    Logout
                </span>
            </a>
        </li>
    </ul>
</nav>

<div class="overlay" onclick="toggleSidebar()"></div>
