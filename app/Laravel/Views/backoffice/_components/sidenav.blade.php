<nav class="sidebar bg-primary">
    <!-- Sidebar Header -->
    <!-- <div class="sidebar-header d-flex align-items-center justify-content-between px-3 py-3">

        <div class="sidebar-brand d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/logo2.png') }}"
                 class="sidebar-logo"
                 alt="Folio logo">

            <span class="label fs-4 fw-bold text-white">
                Folio
            </span>
        </div>

        <button type="button"
                class="btn btn-sm text-white sidebar-toggle"
                onclick="toggleSidebar()"
                aria-label="Toggle sidebar">
            ☰
        </button>

    </div> -->

    <!-- Navigation Links -->
    <ul class="nav flex-column gap-1 px-2 py-3">

        <li>
            <a class="nav-link active rounded"
               href="{{ route('portal.dashboard') }}">
                🏠 <span class="label">Dashboard</span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded" href="#">
                📝 <span class="label">Home page</span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded" href="#">
                📝 <span class="label">About us</span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded" href="#">
                📝 <span class="label">Contact page</span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded"
               href="{{ route('portal.account-management.index') }}">
                👥 <span class="label">CSM index</span>
            </a>
        </li>

        <li>
            <a class="nav-link rounded"
               href="{{ route('portal.logout') }}">
                🚪 <span class="label">Logout</span>
            </a>
        </li>

    </ul>
</nav>

<div class="overlay" onclick="toggleSidebar()"></div>
