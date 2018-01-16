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
        $coupons['jSonCoupon'] = Coupon::getCoupon();
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

    public function crawl()
    {
//        $html = file_get_html('https://getcoupon.vn/store/adayroi/');
//        $data_array = array();
//        foreach ($html->find('div.coupon-title' ) as $element) {
//            $title = $element->innertext;
//            $data['title'] = $title;
//            array_push($data_array,$data);
//
//        }
//
//        foreach ($html->find('div.coupon-des-full') as $element) {
//            $des = $element->innertext;
//            echo  str_replace("Thu gọn","",$des).'</br>';
//            $data['description'] = str_replace("Thu gọn","",$des).'</br>';
//
////            array_push($data_array,$data);
//        }
//
//        dd($data_array);

        $coupons = Coupon::getCoupon()->toArray();
        echo json_encode($coupons);

    }
}




