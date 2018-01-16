<?php
namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Site;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomePageController extends Controller
{
    public function home()
    {
        $data['catList'] = Category::all();
        $data['siteList'] = Site::all();
        $coupons['listcoupons'] = Coupon::all();
        return view('front_end.pages.home.home',$data,$coupons);
    }

    public function single_coupon()
    {
        return view ('front_end.pages.coupons.coupon-single');
    }

    public function showStore($name,$id)
    {
        $data['catList'] = Category::all();
        $data['siteList'] = Site::all();
        $data['listcoupons'] = Coupon::getStoreNameByID($id);
        $data['storeInfo'] = Site::getInfoStoreByID($id);
        return view ('front_end.pages.stores.store_single',$data);
    }

    public function db()
    {

    }

}

