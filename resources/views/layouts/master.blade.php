<!DOCTYPE html>
<html lang="en">

<head>
    @includeIf('layouts.meta')
    @section('meta')
    @show
    @stack('scripts')
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        @includeIf('layouts.navbar')
        @section('navbar')
        @show

        @includeIf('layouts.sidebar')
        @section('sidebar')
        @show

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @includeIf('layouts.breadCrumbs')
            @section('breadcrumbs')
            @show

            <!-- Main content -->
            <section class="content">
                @yield('content')
                @yield('child-content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @includeIf('layouts.footer')
        @section('footer')
        @endsection
    </div>
    <!-- ./wrapper -->

</body>

</html>