<!DOCTYPE html>

<html lang="en">

@include('admin.structure.header-dashboard')

<body>
<div class="main-wrapper">

    @include('admin.structure.sidebar-dashboard')

    @include('admin.structure.navbar-dashboard')

    @yield('content')

</div>

@include('admin.structure.footer-dashboard')

</body>
</html>
