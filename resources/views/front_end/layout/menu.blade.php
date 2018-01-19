
<div class="menu-wrapper ab-menu">
    <div class="container">
        <div class="hovermenu ttmenu menu-color">
            <div class="navbar navbar-default" role="navigation">

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="{{url('/')}}" title="">Trang Chủ</a></li>
                        @foreach($catList as $item)
                            @if($item['parent_id']==0)
                                <li class="dropdown hasmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-angle-down">{{$item['name']}}</span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        {{ subMenu($catList,$item['id']) }}
                                        <li class="dropdown-menu-2" ><a href="store-single.html">Store Single 2 </a></li>
                                    </ul>
                                </li>
                            @endif
                        @endforeach

                        <li class="dropdown hasmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-angle-down">Thương Hiệu</span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($siteList as $value)
                                    <li class="dropdown-menu-2"><a href="{{url('/')}}/store/{{$value->slug}}">{{$value->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li class="dropdown hasmenu userpanel">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/')}}uploads/testi_03.png" alt="" class="img-circle"> <span class="fa fa-angle-down"></span></a>--}}
                            {{--<ul class="dropdown-menu start-right" role="menu">--}}
                                {{--<li><a href="user-dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>--}}
                                {{--<li><a href="user-favorites.html"><i class="fa fa-star"></i> Favorite Stores</a></li>--}}
                                {{--<li><a href="user-saved.html"><i class="fa fa-heart-o"></i> Saved Coupons</a></li>--}}
                                {{--<li><a href="user-submit.html"><i class="fa fa-bullhorn"></i> Submit Coupon</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-lock"></i> Sign Out</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </div><!--/.nav-collapse -->
            </div><!-- end navbar navbar-default clearfix -->
        </div><!-- end menu 1 -->
    </div><!-- end container -->
</div><!-- / menu-wrapper -->