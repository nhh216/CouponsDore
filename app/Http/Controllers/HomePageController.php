<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Coupon;
use App\Models\Site;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomePageController extends Controller
{
    public function home()
    {

//          $test = Coupon::all();
//          foreach ($test as $item)
//          {
//              echo $item->site->homepage.'<br>';
//          }
        $data['catList'] = Category::all();
        $data['siteList'] = Site::all();
        $coupons['listcoupons'] = Coupon::getCouponLimit();
        return view('front_end.pages.home.home', $data, $coupons);
    }

    public function single_coupon()
    {
        return view('front_end.pages.coupons.coupon-single');
    }

    public function showStore($name, $id)
    {
        $data['catList'] = Category::all();
        $data['siteList'] = Site::all();
        $data['listcoupons'] = Coupon::getStoreNameByID($id);
        $data['storeInfo'] = Site::getInfoStoreByID($id);
        return view('front_end.pages.stores.store_single', $data);
    }


    public function autocomplete(\Illuminate\Http\Request $request)
    {
        $term = $request->term;
        $data = Site::getStoreByKeySearch($term);
        $result = array();
        foreach ($data as $key => $v) {
            $result[] = [
                'id' => $v->id,
                'name' => $v->name,
                'logo' => $v->logo,
                'slug' => $v->slug
            ];
        }
        return response()->json($result);
    }

    public function test()
    {
        $site = new Site();
        $site->coupons()->select('*')->get();
        dd($site);

    }

}

