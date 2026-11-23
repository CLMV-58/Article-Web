<nav class="sidebar bg-primary">
    <ul class="nav flex-column gap-1 px-2 py-3 flex-grow-1">
        <li>
            <a class="nav-link rounded {{ request()->routeIs('backoffice.dashboard') ? 'active' : '' }}"
               href="{{ route('backoffice.dashboard') }}">
                <img src="{{ asset('assets/images/SNavDash.png') }}" class="sidebar-icon">
                <span class="label">
                    Dashboard
                </span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded {{ request()->routeIs('backoffice.profile.index') ? 'active' : '' }}"
               href="{{ route('backoffice.profile.index') }}">
                <img src="{{ asset('assets/images/SNavP.png') }}" class="sidebar-icon">
                <span class="label">
                    Profile
                </span>
            </a>
        </li>

        <hr class="borber border-tertiary border-3">

        <li>
            <a class="nav-link rounded {{ request()->routeIs('backoffice.account-management.index') ? 'active' : '' }}"
               href="{{ route('backoffice.account-management.index') }}">
                <img src="{{ asset('assets/images/SNavAM.png') }}" class="sidebar-icon">
                <span class="label">
                    Admin accounts
                </span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded {{ request()->routeIs('backoffice.user-management.index') ? 'active' : '' }}"
               href="{{ route('backoffice.user-management.index') }}">
                <img src="{{ asset('assets/images/SNavUM.png') }}" class="sidebar-icon">
                <span class="label">
                    User Accounts
                </span>
            </a>
        </li>

    </ul>

    <ul class="nav flex-column px-2 py-3 nav-logout">
        <li>
            <a class="nav-link rounded"
            href="{{ route('backoffice.logout') }}">
                <img src="{{ asset('assets/images/SNavLO.png') }}" class="sidebar-icon">
                <span class="label">
                    Logout
                </span>
            </a>
        </li>
    </ul>
</nav>

<div class="overlay" onclick="toggleSidebar()"></div>