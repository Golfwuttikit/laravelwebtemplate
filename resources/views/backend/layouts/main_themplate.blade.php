<html lang="en">
<head>
    @include('backend.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('assets/backend/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('backend.includes.navbar')

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
              <img src="{{asset('assets/backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            @include('backend.includes.sidebar')

        </aside>

        <div class="content-wrapper" style="overflow: auto">
            @yield('content') <!--คื่อส่วนที่สร้างไว้รอเฉยๆ เพื่อที่จะดึงข้อมูล Secsion มาแสดง-->
        </div>

        @include('backend.includes.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>

    @include('backend.includes.foot')
</body>
</html>