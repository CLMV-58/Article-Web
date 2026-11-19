<!DOCTYPE html>
<html lang="en">
<head>
    @include('backoffice._components.metas')
    @include('backoffice._components.styles')
    @yield('page-styles')
</head>
<body>
    @include('backoffice._components.topbar')
    @include('backoffice._components.sidenav')
    @include('backoffice._components.notifications')
    
    <div class="main">
        @yield('content')
    </div>

    @include('backoffice._components.scripts')
    @yield('page-scripts')
</body>
</html>