
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

                            </li>

                            <li>
                                <a href="app.message.html">
                                        <span class="nav-icon">
                                            <i class="fa fa-comment"></i>
                                        </span>
                                    <span class="nav-text">Setting</span>
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

