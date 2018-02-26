<div id="content" class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{Auth::user()->name}}</p>
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
                <ul class="sidebar-menu" data-widget="tree" style="margin-bottom: 10px;">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="treeview">
                        <a href="{{route('admin_page')}}">
                            <i class="fa fa-pie-chart"></i>
                            <span>DashBaoard</span>
                        </a>
                    </li>
                    <li id="title-li-menu" >Nội Dung</li>
                    <li class="treeview">
                        <a href="{{route('admin_category')}}">
                            <i class="fa fa-laptop"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Thương Hiệu</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Mã Giảm Giá</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Deals</span>
                        </a>
                    </li>

                </ul>

                <ul class="sidebar-menu" data-widget="tree" style="margin-bottom: 10px;">
                    <li id="title-li-menu" >Hệ Thống</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Cài Đặt</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>SEO Link</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Tags</span>
                        </a>
                    </li>
                </ul>

            </section>
            <!-- /.sidebar -->
        </aside>
        </div>
    <div class="col-md-10">
        {{--<div class="content-wrapper">--}}
<div style="min-height:1100px; padding: 15px;">
