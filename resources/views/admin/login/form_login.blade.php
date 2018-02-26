
<div class="container" style="margin: auto;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if(Session::has('fail_to_login'))
                <div class="alert alert-danger">
                    {{Session::get('fail_to_login')}}
                </div>
            @endif
            <div class="d-flex flex-column flex" style="background-color: aliceblue; box-shadow: 5px px white;">
                <div class="navbar light bg pos-rlt box-shadow">
                    <div class="mx-auto">
                            <span>
                                <b>Đăng Nhập</b>
                            </span>
                    </div>
                </div>
                <div id="content-body">
                    <div class="py-5 text-center w-100">
                        <div class="mx-auto w-xxl w-auto-xs">
                            <div class="px-3">
                                <form name="form" action="{{route('login')}}" method="post" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" id=txt_Email"" name="txt_Email" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" id="txt_Password" name="txt_Password" required >
                                    </div>
                                    <div class="mb-3">
                                        <label class="md-check">
                                            <input type="checkbox">
                                            <i class="primary"></i> Keep me signed in</label>
                                    </div>
                                    <button type="submit" class="btn primary" name="btn_Login">Đăng Nhập</button>
                                </form>
                                <div class="my-4">
                                    <a href="forgot-password.html" class="text-primary _600">Quên mật khẩu?</a>
                                </div>
                                <div>Bạn đã có tài khoản?
                                    <a href="signup.html" class="text-primary _600">Đăng kí mới</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
