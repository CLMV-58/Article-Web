<style>
    .active {
        font-weight: 700;
        color: #312920 !important;
        background-color: #918574 !important;
    }
    :root {
        --bs-primary: #524639 !important;
        --bs-primary-rgb: 82, 70, 57;
        --bs-secondary: #918574 !important;
        --bs-secondary-rgb: 145, 133, 116;
        --bs-tertiary: #E0D9D3 !important;
        --bs-tertiary-rgb: 224, 217, 211;
        --bs-body-color: #171614;
        --topbar-height: 60px;
        --sidebar-width: 240px;
        --sidebar-collapsed-width: 72px;
    }
    body {
        background-color: #E0D9D3 !important;
    }
    .bg-body-secondary {
        background-color: #918574 !important;
    }
    .bg-body-tertiary {
        background-color: #E0D9D3 !important;
    }
    .btn-primary {
        background-color: #524639 !important;
    }
    .btn-secondary {
        background-color: #918574 !important;
    }
    .btn-outline-primary {
        --bs-btn-color: #312920;
        --bs-btn-border-color: #312920;
        --bs-btn-hover-bg: #312920;
        --bs-btn-hover-border-color: #312920;
        --bs-btn-hover-color: #ffffff;
    }
    /* Sidebar */
    .sidebar {
        position: fixed;
        top: var(--topbar-height);
        bottom: 0;
        left: 0;
        width: var(--sidebar-width);
        z-index: 1030;
        overflow-x: hidden;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        transition: width .25s, transform .25s;
    }
    .sidebar-header {
        min-height: 75px;
        white-space: nowrap;
    }
    .sidebar-brand {
        min-width: 0;
        overflow: hidden;
    }
    .sidebar-logo {
        width: 40px;
        height: 40px;
        min-width: 40px;
        object-fit: contain;
        flex-shrink: 0;
    }
    .sidebar-icon {
        width: 22px;
        height: 22px;
        object-fit: contain;
        margin-right: 8px;
    }
    .sidebar-toggle {
        flex-shrink: 0;
        border: none;
        font-size: 20px;
    }
    .sidebar-toggle:hover {
        background-color: rgba(255,255,255,.1);
    }
    .sidebar .nav-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        color: #E0D9D3;
        white-space: nowrap;
    }
    .sidebar .nav-link:hover {
        background: rgba(255,255,255,.1);
    }
    .sidebar .nav-logout {
        margin-top: auto;
        padding-bottom: 16px;
    }
    .main {
        margin-left: var(--sidebar-width);
        padding-top: var(--topbar-height);
        transition: margin-left .25s;
    }
    .admin-topbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: var(--topbar-height);
        z-index: 1040;
        margin: 0;
    }
    body.collapsed .sidebar {
        width: var(--sidebar-collapsed-width);
    }
    body.collapsed .main {
        margin-left: var(--sidebar-collapsed-width);
    }
    body.collapsed .label {
        display: none;
    }
    body.collapsed .sidebar-header {
        flex-direction: column;
        gap: 8px;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    body.collapsed .sidebar-brand {
        justify-content: center;
    }
    body.collapsed .sidebar .nav-link {
        justify-content: center;
        padding-left: 0;
        padding-right: 0;
    }
    .chart {
        height: 220px;
    }
    .bar {
        width: 100%;
        max-width: 36px;
        border-radius: 6px 6px 0 0;
    }
    .overlay {
        display: none;
        position: fixed;
        inset: var(--topbar-height) 0 0;
        background: rgba(0,0,0,.45);
        z-index: 1020;
    }
    @media (max-width: 767px) {
        .sidebar {
            width: 260px;
            transform: translateX(-100%);
        }
        body.open .sidebar {
            transform: translateX(0);
        }
        body.open .overlay {
            display: block;
        }
        .main {
            margin-left: 0 !important;
        }
        body.collapsed .label {
            display: inline;
        }
        body.collapsed .sidebar {
            width: 260px;
        }
        body.collapsed .sidebar-header {
            flex-direction: row;
            justify-content: space-between;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        body.collapsed .sidebar .nav-link {
            justify-content: flex-start;
            padding: 10px 12px;
        }
    }
</style>