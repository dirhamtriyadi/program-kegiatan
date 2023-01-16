<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #135b71;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Bidang</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Bidang
                        </p>
                    </a>
                </li>
                <li class="nav-header">MANAGE SYSTEM</li>

                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-header">Untuk Penanggung Jawab</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-calendar"></i>
                        <p>
                            Rencana
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="rencana-page.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pendaftaran Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="status.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Status Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Untuk Dekan</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Menunggu Approval
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="penanggung-jawab.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bukti.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bukti</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-header"></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-solid fa-right-from-bracket"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </li>
            </ul>
                <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
