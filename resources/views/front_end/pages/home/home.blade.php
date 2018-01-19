@extends('front_end.templates.main',['hasSlider'=>false,'homePage'=>true,'title'=>'Chia sẻ mã giảm giá - Chia sẻ khuyến mại'])
@section('title')
@section('content')
    @include('front_end.cpn.coupon')
@endsection
@section('sidebar')
    @include('front_end.layout.sidebar')
@endsection