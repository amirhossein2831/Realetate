<!DOCTYPE html>

<html lang="en">

    @include('admin.header-dashboard')

<body>
<div class="main-wrapper">

    @include('admin.sidebar-dashboard')

    @include('admin.navbar-dashboard')

    @yield('content')

</div>

    @include('admin.footer-dashboard')

</body>
</html>
