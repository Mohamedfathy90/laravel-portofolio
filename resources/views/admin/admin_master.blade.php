<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('back') }}/assets/images/favicon.ico">
        
        <!-- Bootstrap Css -->
        <link href="{{ asset('back') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        
        <!-- jquery.vectormap css -->
        <link href="{{ asset('back') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('back') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('back') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
        
        <!-- Icons Css -->
        <link href="{{ asset('back') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        
        <!-- App Css-->
        <link href="{{ asset('back') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        
        @livewireStyles
    
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('admin.includes.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.includes.left_sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->
            @include('admin.includes.footer')
        </div>
        <!-- END layout-wrapper -->

 

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>       
    
        @livewireScripts
        
    </body>
</html>
