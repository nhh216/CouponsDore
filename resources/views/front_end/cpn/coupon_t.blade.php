@foreach($listcoupons as $coupon)
    <div class="coupon-list list-wrapper">
        <div class="coupon-wrapper">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="post-media text-center">
                        <a href="coupon-single.html"><img src="{{asset($coupon->thumb)}}" alt="" class="img-responsive"></a>
                        <small><a href="store-single.html">View Store Coupons</a></small>
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="coupon-meta">

                        <h4><a href="coupon-single.html">{{$coupon->title}}</a></h4>
                        <div class="coupon-top clearfix">
                            <div class="rating pull-left">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <small>21 Rating</small>
                            </div>
                            <div class="favorite-coupon pull-right text-right">
                                <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom" title="Favorite"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div><!-- end coupon-top -->
                        <p>{{$coupon->description}}</p>
                    </div><!-- end meta -->

                    <div class="showcode">
                        <a href="#" class="code-link" data-ex-link="">
                            <span class="coupon-code">2016TATILRA50</span>
                            <span class="show-code">Lấy Mã</span>
                        </a>
                    </div><!-- end showcode -->

                    <div class="coupon-bottom clearfix">
                        <small class="pull-left"></small>
                        <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12 Comments</a></small>
                    </div><!-- end coupon-top -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end coupon-wrapper -->
    </div><!-- end coupon list -->
@endforeach