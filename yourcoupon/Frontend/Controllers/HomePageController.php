<?php

namespace App\Http\Controllers;

use App\Models\Category_Coupon;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Site;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use GuzzleHttp\Client;
use DateTime;
use Illuminate\Support\Collection;


class HomePageController extends Controller
{
    protected $categories;
    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function home()
    {
        $data['catList'] = $this->categories;
        $data['siteList'] = Site::getAllStores();
        $coupons['listcoupons'] = Coupon::getCouponLimit();
        return view('front_end.pages.home.home', $data, $coupons);
    }

    public function single_coupon()
    {
        return view('front_end.pages.coupons.coupon-single');
    }

    public function showCouponsByStore($name, $id)
    {
        $data['catList'] = $this->categories;
        $data['siteList'] = Site::getAllStores();
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

    }

    public function check()
    {
    echo "anczxcasdas";

    }

    public  function abc()
    {
        $coupon = Coupon::all();
        foreach ($coupon as $k )
        {
            echo $k->Site->link_offer. '<br>';
        }


    }




}