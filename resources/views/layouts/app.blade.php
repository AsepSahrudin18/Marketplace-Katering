<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace Katering</title>
    <link rel="stylesheet" href="{{ asset('../assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            @include('layouts.sidebar')
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Navbar Start -->
            <header class="app-header">
                @include('layouts.navbar')
            </header>
            <!--  Navbar End -->
            <div class="container-fluid">

                @yield('contents')
                <div class="py-6 px-6 text-center">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('../assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('../assets/js/app.min.js') }}"></script>
    <script src="{{ asset('../assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('../assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('../assets/js/dashboard.js') }}"></script>
</body>

</html>
