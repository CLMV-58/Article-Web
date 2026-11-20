<nav class="sidebar bg-primary">
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
                👥 <span class="label">Profile</span>
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
