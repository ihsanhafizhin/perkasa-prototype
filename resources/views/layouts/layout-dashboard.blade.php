@php
    $data = $data ?? Session::get('data');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layout-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex justify-content-start align-items-start">
                <div>
                    <img src="{{ asset('assets/img/logo_perkasa-removebg-preview.png') }}" alt="" width="100%" height="auto">
                </div>
               
                 <!-- Sidebar Toggler (Sidebar) -->
                {{-- <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div> --}}
            </a>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item nav-item-sidebar">
                <a class="nav-link " href="{{ route('dashboard-chart') }}" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Dashboard</span>
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRab"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-calendar-alt"></i>
                    <span>RAB</span>
                </a>
                <div id="collapseRab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                        <a class="collapse-item" href="{{ route('dashboard') }}">RAB Kegiatan</a>
                    </div>
                </div>
            </li>

            <!-- TOR/KAK dan Data Dukungs Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTor"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-database"></i>
                    <span>TOR/KAK dan Data Dukung</span>
                </a>
                <div id="collapseTor" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                        <a class="collapse-item" href="{{ route('data-pendukung') }}">TOR/KAK dan Data Dukung</a>
                    </div>
                </div>
            </li>  

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-clipboard"></i>
                    <span>Monitoring Penelaahan</span>
                </a>
                <div id="collapseMonitoring" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                        <a class="collapse-item" href="{{ route('monitoring-penelaahan') }}">Penelaah dan Reviewer</a>
                        <a class="collapse-item" href="{{ route('monitoring-penelaahan') }}">Hasil Penelaahan</a>
                    </div>
                </div>
            </li> 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setting</span>
                </a>
                <div id="collapseSetting" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterData"
                            aria-expanded="true">
                            <span>Master Data</span>
                        </a>
                        <div id="collapseMasterData" class="collapse" aria-labelledby="headingUtilities">
                            <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                                <a class="nav-link" href="{{ route('unit-kerja') }}">
                                    <span>Unit Kerja</span>
                                </a>
                                <a class="nav-link" href="{{ route('unit-organisasi') }}">
                                    <span>Unit Organisasi</span>
                                </a>
                            </div>
                        </div>
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMag"
                            aria-expanded="true">
                            <span>Setup MAG</span>
                        </a>
                        <div id="collapseMag" class="collapse" aria-labelledby="headingUtilities">
                            <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                                <a class="nav-link" href="{{ route('program') }}">
                                    <span>Program</span>
                                </a>
                                <a class="nav-link" href="{{ route('kegiatan') }}">
                                    <span>Kegiatan</span>
                                </a>
                                <a class="nav-link" href="{{ route('kro') }}">
                                    <span>KRO</span>
                                </a>
                                <a class="nav-link" href="{{ route('ro') }}">
                                    <span>RO</span>
                                </a>
                                <a class="nav-link" href="{{ route('komponen') }}">
                                    <span>komponen</span>
                                </a>
                                <a class="nav-link" href="{{ route('sub-komponen') }}">
                                    <span>Sub Komponen</span>
                                </a>
                                <a class="nav-link" href="{{ route('akun-coa') }}">
                                    <span>Akun COA</span>
                                </a>
                            </div>
                        </div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManageUsers"
                            aria-expanded="true">
                            <span>Manage Users</span>
                        </a>
                        <div id="collapseManageUsers" class="collapse" aria-labelledby="headingUtilities">
                            <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                                <a class="nav-link" href="{{ route('users') }}">
                                    <span>Users</span>
                                </a>
                                <a class="nav-link" href="{{ route('user-level-permission') }}">
                                    <span>User Level Permission</span>
                                </a>
                                <a class="nav-link" href="{{ route('user-levels') }}">
                                    <span>User Levels</span>
                                </a>
                                <a class="nav-link" href="{{ route('group') }}">
                                    <span>Group</span>
                                </a>
                                <a class="nav-link" href="{{ route('group-member') }}">
                                    <span>Group Member</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li> 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWorkflow"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file"></i>
                    <span>Workflow</span>
                </a>
                <div id="collapseWorkflow" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded menu-sidebar-dropdown">
                        <a class="collapse-item" href="utilities-other.html">#</a>
                        <a class="collapse-item" href="utilities-other.html">#</a>
                    </div>
                </div>
            </li> 
           <div class="d-flex flex-column row-footer">
            <div class="col-12 d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/KPU_Logo.svg.png') }}" alt="" width="45%">
                <h6>Komisi Pemilihan Umum</h6>
                <p>Republik Indonesia</p>
            </div>
           </div>
           <div class="sidebar-footer d-flex justify-content-center align-items-center">
            <p>Ⓒ2022 KPU, All rights reserved</p>
           </div>
        </ul>

        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="d-flex justify-content-end navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-search" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2"> 
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="{{asset('assets/img copy/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ auth()->user()->name }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

    {{-- Chart js --}}
    @stack('chart-js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    {{-- Javascript Table --}}
    @stack('js-table')
</body>

</html>