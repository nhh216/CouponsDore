<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Site;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use GuzzleHttp\Client;
use DateTime;
use Illuminate\Support\Collectio;


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

    public function test() // login to massoffer an download data.xls
    {
        $time = new DateTime();
        $username = 'b0ybg';
        $password = 'Huyhung~12';
        $client = new Client();
        $cookieJar = new \GuzzleHttp\Cookie\CookieJar();
        $client->post('https://pub.masoffer.com/sign-in',[
            'form_params'=>[
                'username' => $username,
                'password' => $password,
                'action'   => 'https://pub.masoffer.com/sign-in'
            ],
                'cookies' => $cookieJar
         ]
         );

        $reponse2 = $client->get('https://pub.masoffer.com/promotion?layout=table&q=%2Fpromotion&export=xls',['cookies' => $cookieJar]);
        $result = $reponse2->getBody()->getContents();
        $file = file_put_contents(storage_path('data/data.xls'),$result);
        $filebackup = file_put_contents(storage_path('data/data-'.$time->format('d-m-y').'.-backup.xls'),$result);

    }

    public function check() //  read and import data custormed to DB
    {

        $data =   Excel::load('storage/data/data.xls', function($reader) {})->get() ;
        if($data->count())
        {
            $i=0;
            foreach ($data as $key => $value)
            {
                 $site_id = Site::getIdByShortName ($value->offer_id);
                 if($value->nganh_hang == '')
                 {
                     $cat_id =Category::getCatIdByName('Các Ngành Hàng');
                 }
                else
                {
                     $cat_id = Category::getCatIdByName($value->nganh_hang);
                }
                if (Category::getCatIdByName($value->nganh_hang)== null)
                {
                    $cat_id =Category::getCatIdByName('Tổng Hợp');
                }
                foreach ($cat_id as $c)
                {

                    if($c == null)
                    {
                        $c_id = '';
                    }else
                    {
                        $c_id = $c->id;
                    }

                    foreach ($site_id as $v)
                    {

                        if($v == '')
                        {
                            $s_id = '';
                        }else
                        {
                            $s_id = $v->id;
                        }
                             $arr[] = [
                                'category_id'=>$c_id,
                                 'code'=>$value->ma_giam_gia,
                                 'description'=>$value->mo_ta,
                                 'exp_date'=>$value->end,
                                 'link_offer'=>$value->link_phan_phoi,
                                 'site_id'=>$s_id,
                                 'title'=>$value->campaign,
                            ];

                    }
                 }

               }
        }
        Coupon::insertIntoCoupons($arr);

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