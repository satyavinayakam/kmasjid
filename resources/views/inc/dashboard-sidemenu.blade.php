@section('dashboard-footer')

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-line-chart"></i><span>Statistik</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar"></i> <span>Urus Kalendar Aktiviti</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-map-marker"></i> <span>Urus Masjid</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span>Urus Isi Kandungan</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-money"></i> <span>Urus eBayar</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-money"></i> <span>Urus eSedekah</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop"></i> <span>Laporan</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span>Urus Pengguna</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span>Tetapan</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@show