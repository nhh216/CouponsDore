<?php

namespace App\Console\Commands;

use App\Models\Category_Coupon;
use Illuminate\Console\Command;
use App\Models\Coupon;
use App\Models\Site;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;
use DateTime;
class Update_DataBase extends Command
{

    protected $signature = 'Update_DataBase:command';

    public   function downloadData()
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
        $filebackup = file_put_contents(storage_path('data/data-'.$time->format('d-m-y').'-backup.xls'),$result);
    }

    public   function importDataToDB()
    {
        $data =   Excel::load('storage/data/data.xls', function($reader) {})->get() ;
        $arr = array();
        if($data->count())
        {
            foreach ($data as $key => $value)
            {
                if(Coupon::checkExisted($value->campaign) == false)
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
        }
        Coupon::insertIntoCoupons($arr);
    }

    public function importToCCTable()
    {
        $data =   Excel::load('storage/data/data.xls', function($reader) {})->get() ;
        $arrCC = array();
        if($data->count())
        {
            foreach ($data as $key => $value)
            {
                $arrCC [] = [
                    'coupon_id'=>$value->id,
                    'category_id'=>$value->category_id,
                ];
            }
        }
        Category_Coupon::insertIntoCategoryCoupon($arrCC);
    }

    public function handle()
    {
        $this->downloadData();
        $this->importDataToDB();
//        $this->importToCCTable();
    }

}