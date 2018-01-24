<?php
    namespace App\Http\Controllers;
    use App\Models\User;
    use App\Http\Requests;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AdminController extends Controller
    {
        public function index()
        {
           return view('admin.pages.main');
        }
        public function showLogin()
        {
            return view('admin.pages.login');
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

               return view('admin.pages.dashboard',$user);
            }
            else
            {
                echo "khong thanh cong";
            }
        }
    }

