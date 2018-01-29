@foreach($listcoupons as $coupon)
    <div class="coupon-list list-wrapper">
        <div class="coupon-wrapper">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="post-media text-center">
                        <a a href="#ma-giam-gia-{{$coupon->id}}" class="code-link"
                           data-ex-link="{{$coupon->link_offer}}"><img src="{{asset('/').$coupon->site->logo}}" alt=""
                                                                           class="img-responsive"></a>
                        <hr>
                        <div class="showcode">
                            <a href="#" class="code-link" data-ex-link="{{$coupon->link_offer}}">
                                <span class="coupon-code">{{$coupon->code}}</span>
                                <span class="show-code">Lấy Mã</span>
                            </a>
                        </div><!-- end showcode -->

                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="coupon-meta">
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
                                <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom"
                                   title="Favorite"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div><!-- end coupon-top -->
                        <h4><a href="#ma-giam-gia-{{$coupon->id}}" class="code-link"
                               data-ex-link="{{$coupon->link_offer}}">{{$coupon->title}}</a></h4>
                        <p>{{$coupon->description}}</p>
                    </div><!-- end meta -->


                    <div class="coupon-bottom clearfix" style="border-top: 1px solid #2e6da4;">
                        <small class="pull-left"></small>
                        <small class="pull-right"><a href="store-single.html"><i class="fa fa-comment-o"></i> 12
                                Comments</a></small>
                    </div><!-- end coupon-top -->
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- Modal -->
            <div id="ma-giam-gia-{{$coupon->id}}" class="modal fade code-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4>{{$coupon->title}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset($coupon->thumb)}}" alt="" class="img-responsive">
                                    <div class="modal-button">
                                        <a href="{{$coupon->link_offer}}" target="_blank" title=""
                                           class="btn btn-default btn-block">Mua Hàng<i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-md-8">
                                    <div class="coupon-meta">
                                        <div class="coupon-top clearfix">
                                            <div class="rating pull-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <small>71 Rating</small>
                                            </div>
                                            <div class="favorite-coupon pull-right text-right">
                                                <a href="coupon-favorites.html" data-toggle="tooltip"
                                                   data-placement="bottom" title="Favorite"><i
                                                            class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end coupon-meta -->

                                    <p>{{$coupon->description}}</p>

                                    <div class="modal-share clearfix">
                                        <ul class="list-inline social-small">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end share -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end modal-body -->

                        <div class="modal-footer">
                            <div class="coupon-area">
                                <div class=" row">
                                    <div class="col-md-4 text-left">
                                        <div class="coupon-vote">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Work!"><i
                                                        class="fa fa-smile-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Poor!"><i
                                                        class="fa fa-frown-o"></i></a>
                                        </div><!-- end coupon-meta -->
                                    </div><!-- end col -->
                                    <div class="col-md-8 text-center">
                                        <button data-clipboard-text="{{$coupon->code}}"
                                                class="coupon-code btn btn-primary btn-block" type="submit"
                                                title="Click to Copy">{{$coupon->code}}</button>
                                        <small>Lấy Mã</small>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end coupon-area -->
                        </div><!-- end modal-footer -->
                    </div><!-- end mpdal-content -->
                </div><!-- end modal-dialog -->
            </div><!-- end modal -->
        </div><!-- end coupon-wrapper -->
    </div><!-- end coupon list -->

@endforeach