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
    
    <div class="main">
        @include('backoffice._components.notifications')
        @yield('content')
    </div>

    @include('backoffice._components.scripts')
    @yield('page-scripts')
</body>
</html>