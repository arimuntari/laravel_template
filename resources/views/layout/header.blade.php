@php
$masterDataMenuList = ['Bank', 'Banner'];
$masterDataActiveMenu = in_array($title, $masterDataMenuList)?'menu-is-opening menu-open':'';
@endphp
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ asset('images/user.png') }}" width="30px" alt="User Avatar"
                    class=" img-circle">
                Administrator
            </a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ asset('template/index3.html') }}" class="brand-link">
        <img src="{{ asset('images/user.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PETKU SHOP </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ URL::to('admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{$masterDataActiveMenu}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/bank')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bank</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/banner')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/serviceType')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/pet')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hewan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/member')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/groomer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Groomer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Transaction
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/topup')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Topup</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/transaction')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/withdraw')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penarikan Saldo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/fee')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pendapatan Bersih</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/income')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Uang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/outcome')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Uang Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/groomer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Groomer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/member')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/transaction')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/pet')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hewan terbanyak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/serviceType')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/memberStatus')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member Aktif/Non Aktif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/report/transactionType')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipe Transaksi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/users') }}" data="users" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>