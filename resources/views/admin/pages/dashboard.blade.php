@extends('admin.tempates.main')
@section('content')

    <div class="app" id="app">
        <div id="aside" class="app-aside fade nav-expand white" aria-hidden="true">
            <div class="sidenav modal-dialog dk">
                @foreach($user as $val)
                <div class="navbar">
                    <a href="chuyen sang trang profile" class="navbar-brand">
                        <img src="{{asset('/')}}admin/assets/images/logo.png" alt="." class="hide">
                        <span class="hidden-folded d-inline" style="color: #FFFFFF;">{{$val->name}}</span>
                    </a>
                </div>
                @endforeach
                <div class="flex hide-scroll">
                    <div class="scroll">
                        <div class="nav-active-theme" data-nav>
                            <ul class="nav bg">
                                <li class="nav-header">
                                    <span class="text-xs hidden-folded">Main</span>
                                </li>
                                <li>
                                    <a href="dashboard.1.html">
                                        <span class="nav-icon">
                                            <i class="fa fa-dashboard"></i>
                                        </span>
                                        <span class="nav-text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="nav-caret">
                                            <i class="fa fa-caret-down"></i>
                                        </span>
                                        <span class="nav-icon">
                                            <i class="fa fa-align-left"></i>
                                        </span>
                                        <span class="nav-text">Layout</span>
                                    </a>
                                    <ul class="nav-sub">
                                        <li>
                                            <a href="layout.header.html">
                                                <span class="nav-text">Header</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layout.sidenav.html">
                                                <span class="nav-text">Sidenav</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layout.aside.html">
                                                <span class="nav-text">Aside</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="layout.flex.html">
                                                <span class="nav-text">Flex</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="app.inbox.html">
                                        <span class="nav-badge">
                                            <b class="badge badge-sm badge-pill success">6</b>
                                        </span>
                                        <span class="nav-icon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <span class="nav-text">Inbox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app.message.html">
                                        <span class="nav-icon">
                                            <i class="fa fa-comment"></i>
                                        </span>
                                        <span class="nav-text">Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app.user.html">
                                        <span class="nav-icon">
                                            <i class="fa fa-phone-square"></i>
                                        </span>
                                        <span class="nav-text">Users</span>
                                    </a>
                                </li>
                                <li class="pb-2 hidden-folded"></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection