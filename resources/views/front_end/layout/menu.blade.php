<div class="menu-wrapper ab-menu">
    <div class="container">
        <div class="hovermenu ttmenu menu-color">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                </div><!-- end navbar-header -->

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="index.html" title="">Trang Chủ</a></li>
                        @foreach($catList as $item)
                            @if($item['parent_id']==0)
                                <li class="dropdown hasmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-angle-down">{{$item['name']}}</span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        {{ subMenu($catList,$item['id']) }}
                                        <li><a href="store-single.html">Store Single 2 </a></li>
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        <li><a href="coupons.html" title="">Coupons</a></li>
                        <li><a href="printable.html" title="">Printable</a></li>
                        <li><a href="categories.html" title="">Categories</a></li>
                        <li><a href="stores.html" title="">Stores</a></li>
                        <li><a href="blog.html" title="">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown hasmenu userpanel">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="uploads/testi_03.png" alt="" class="img-circle"> <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu start-right" role="menu">
                                <li><a href="user-dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                <li><a href="user-favorites.html"><i class="fa fa-star"></i> Favorite Stores</a></li>
                                <li><a href="user-saved.html"><i class="fa fa-heart-o"></i> Saved Coupons</a></li>
                                <li><a href="user-submit.html"><i class="fa fa-bullhorn"></i> Submit Coupon</a></li>
                                <li><a href="#"><i class="fa fa-lock"></i> Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!-- end navbar navbar-default clearfix -->
        </div><!-- end menu 1 -->
    </div><!-- end container -->
</div><!-- / menu-wrapper -->