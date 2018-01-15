@extends('front_end.templates.main',['hasSlider'=>false,'homePage'=>false])
@section('title','Tiêu Đề')
@section('content')
    @include('front_end.cpn.store',['storeInfo'=>$storeInfo])
    @include('front_end.cpn.tab_content', [ 'listcoupons'=> $listcoupons])
@endsection
@section('sidebar')
    @include('front_end.layout.sidebar')
@endsection