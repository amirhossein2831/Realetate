<!DOCTYPE html>

<html lang="en">

@include('admin.structure.header-dashboard')

<body>
<div class="main-wrapper">

    @include('admin.structure.sidebar-dashboard')

    @include('admin.structure.navbar-dashboard')

    <div class="page-wrapper">

        @yield('content')

        @include('admin.structure.footer-dashboard')

    </div>

</div>

@include('admin.structure.script-dashboard')

</body>
</html>
