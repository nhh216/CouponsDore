@extends('front_end.templates.main',['hasSlider'=>false,'homePage'=>false])
@section('title','Tiêu Đề')
@section('content')
    @include('front_end.cpn.store')
    @include('front_end.cpn.tab_content')
@endsection
@section('sidebar')
    @include('front_end.layout.sidebar')
@endsection