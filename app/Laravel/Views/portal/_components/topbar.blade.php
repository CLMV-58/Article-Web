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
        <span class="text-light ms-2 d-none d-sm-inline">
            Folio User Portal
        </span>
    </div>

    <div class="ms-auto d-flex align-items-center gap-3">
        @auth('user')
            <span class="text-light text-nowrap">
                {{ auth('user')->user()->username }}
            </span>
        @endauth
    </div>
  </div>
</nav>