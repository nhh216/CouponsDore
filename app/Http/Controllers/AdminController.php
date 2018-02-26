<?php
    namespace App\Http\Controllers;
    use App\Models\User;
    use App\Http\Requests;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;


    class AdminController extends Controller
    {
        public function index()
        {
            return view('admin.pages.main.dashboard');
        }

        public function showLogin()
        {
            if(Session::has('login'))
            {
                return redirect()->route('admin_page');
            }
            else
            {
                return view('admin.pages.login.login');
            }
        }

        public function doLogin(Request $request)
        {
            if(isset($_REQUEST['btn_Login']))
            {
                $email =  $request['txt_Email'];
                $password =  $request['txt_Password'];

            }
            if (Auth::attempt(['email'=>$email, 'password'=>$password]))
            {
                $user['user'] = User::all();
                $request->session()->put('login',true);
                $request->session()->put('email',$email);
            }
            if(Session::has('login'))
            {
                return redirect()->route('admin_page');
            }
            else
            {
                return redirect()->back()->with('fail_to_login','Sai thông tin đăng nhập. Vui lòng kiểm tra lại email và mật khẩu.');
            }
        }



        public function editCategory()
        {

            return view('admin.pages.category.edit_categories');
        }

    }

