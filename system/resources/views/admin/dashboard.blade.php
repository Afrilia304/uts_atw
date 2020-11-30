<!-- untuk membuat link sidebar/ link navbar nya bisa dinamis -->
@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Coffee Bloger</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/fontawesome/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public')}}/asset/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-info">
            <!-- button responsive sidebar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3" style="width: 58vw;">
                <!-- <div class="input-group input-group-sm">
                    <input style="width: 46vw;" class=" form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div> -->
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">
                <li class="dropdown shadow-sm mr-3 p-1 bg-gray rounded-pill">
                    <a data-toggle="dropdown" class="dropdown-toggle  d-flex align-items-center" href="#">
                        <div class="user-panel">
                            <div class="image">
                             <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <span class="username text-uppercase ml-2">
                      
                        </span>
                        <!-- <b class="caret"></b> -->
                    </a>
                    <ul class="dropdown-menu p-3">
                        <li><a class="nav-link" href="#"><i class="fa fa-suitcase mr-2"></i>Profile</a></li>
                        <li><a class="nav-link" href="{{url('user')}}"><i class="fa fa-key mr-2"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-warning elevation-4">
            <!-- Brand Logo -->


            <!-- Sidebar -->
            <div class="sidebar" style="margin-top: -20px;">
                <!-- Sidebar Menu -->
                <nav class="">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <hr>
                        <li class="nav-item">
                            <a href="{{url('/dashboard')}}" class="nav-link btn btn-outline-warning">
                                <i class="nav-icon fa fa-plus border-radius" style="margin-left: -20px;"></i>
                                <p>Tambah Artikel</p>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="{{url('index_admin')}}" class="nav-link {{checkRouteActive('index_admin')}}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/artikel')}}" class="nav-link {{checkRouteActive('admin/artikel')}}">
                                <i class="nav-icon fas fa-motorcycle"></i>
                                <p>Artikel</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{url('')}}" class="nav-link {{checkRouteActive('')}}">
                                <i class="nav-icon fas fa-phone-volume"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <h2>Selamat Datang Admin</h2>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Content -->
                    @include('template.utils.notif')
                    @yield('content')
                    <!-- akhir content -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.5
                </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{url('public')}}/asset/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('public')}}/asset/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{url('public')}}/asset/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('public')}}/asset/admin/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{url('public')}}/asset/admin/dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{url('public')}}/asset/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/raphael/raphael.min.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{{url('public')}}/asset/admin/plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{url('public')}}/asset/admin/dist/js/pages/dashboard2.js"></script>

    <!-- DataTables -->
    <script src="{{url('public')}}/asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/asset/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>