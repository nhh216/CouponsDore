@foreach($storeInfo as $item)
<div class="section wb">
    <div class="container">
        <div class="row">
            <div class="content col-md-8">
                <div class="post-wrapper single-store">
    <div class="featured hidden-xs"><a data-placement="top" data-toggle="tooltip" title="Favorite Store" href="#"><i class="fa fa-heart-o"></i></a></div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="post-media text-center">
                <a href="coupon-single.html"><img src="{{asset('/').$item->logo}}" alt="" class="img-responsive"></a>
                <small><a href="#">{{$item->homepage}}</a></small>
            </div>
            <!-- end media -->
        </div>
        <!-- end col -->

        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="coupon-meta">
                <h2>{{$item->name}} <small><a href="store-single.html"><i class="fa fa-rss"></i>Theo Dõi</a></small></h2>
                <p>{{$item->description}}</p>
            </div>
            <!-- end meta -->

            <div class="coupon-bottom clearfix">
                <div class="post-sharing">
                    <ul class="list-inline">
                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <!-- end post-sharing -->
            </div>
            <!-- end coupon-top -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endforeach
<hr class="invis">
