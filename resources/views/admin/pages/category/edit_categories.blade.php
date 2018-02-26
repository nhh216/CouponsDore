@extends('admin.tempates.main')
@section('menu')
    @include('admin.layout.menu_sidebar')
@endsection
@section('content')
    @include('admin.cpn.category_table')
@endsection
