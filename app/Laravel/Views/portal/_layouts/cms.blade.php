<!DOCTYPE html>
<html lang="en">
<head>
    @include('portal._components.metas')
    @include('portal._components.styles')
    @yield('page-styles')
</head>
<body>
    @include('portal._components.topbar')
    @include('portal._components.sidenav')
    
    <div class="cms_main">
        @include('portal._components.notifications')
        @yield('content')
    </div>

    @include('portal._components.scripts')
    @yield('page-scripts')
</body>
</html>