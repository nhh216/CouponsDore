<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomePageController extends Controller
{
    public function home()
    {
        $catList['catList'] = Category::all();
        return view('front_end.pages.home.home',$catList);
    }

    public function single_coupon()
    {
        return view ('front_end.pages.coupons.coupon-single');
    }

    public function showStore()
    {
        $catList['catList'] = Category::all();
        return view ('front_end.pages.stores.store_single',$catList);
    }


}

