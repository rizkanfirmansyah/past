@section('sidebar')

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link elevation-4">
        <!-- <img src="#" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">EPASTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="#" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/asesment') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Asesment</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/geladi') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Geladi</p>
                    </a>
                </li>
                <li class="nav-header">Master</li>
                <li class="nav-item">
                    <a href="{{ url('/master/rank') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Rank</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/master/position') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Position</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/master/member') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Task
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/master/task')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/master/task/single')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Individual Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/master/task/group')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Group Task</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/master/team') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Team</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/master/user') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-header">Beranda</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@endsection