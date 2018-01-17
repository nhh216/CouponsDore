@extends('front_end.templates.main',['hasSlider'=>false,'homePage'=>true])
@section('title','Tiêu Đề')
@section('content')
    @include('front_end.cpn.coupon')
@endsection
@section('sidebar')
    @include('front_end.layout.sidebar')
@endsection
