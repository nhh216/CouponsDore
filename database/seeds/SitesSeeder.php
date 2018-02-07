<?php

use Illuminate\Database\Seeder;
use App\Models\Site;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           [
               'id'=>'1',
               'name'=>'Lazada',
               'short_name'=>'lazada',
               'logo'=>'uploads/stores/lazada-logo.png'
           ],
            [
                'id'=>'2',
                'name'=>'Shopee',
                'short_name'=>'shopee',
                'logo'=>'uploads/stores/shopee.png'
            ],
            [
                'id'=>'3',
                'name'=>'Yes24',
                'short_name'=>'yes24',
                'logo'=>'uploads/stores/yes24.png'
            ],
            [
                'id'=>'4',
                'name'=>'FPT Shop',
                'short_name'=>'fptshop',
                'logo'=>'uploads/stores/fpt-shop.png'

            ],
            [
                'id'=>'5',
                'name'=>'Huggie',
                'short_name'=>'huggie',
                'logo'=>'uploads/stores/huggie.png'
            ],
            [
                'id'=>'6',
                'name'=>'VinGroup',
                'short_name'=>'vingroup',
                'logo'=>'uploads/stores/vin.png'
            ],
            [
                'id'=>'7',
                'name'=>'Fpt Play',
                'short_name'=>'fptplay',
                'logo'=>'uploads/stores/fpt.png'
            ],
            [
                'id'=>'8',
                'name'=>'Aeone Shop',
                'short_name'=>'aeoneshop',
                'logo'=>'uploads/stores/aeshop.png'
            ],
            [
                'id'=>'9',
                'name'=>'Vi Va Vi Vu',
                'short_name'=>'vivavivu',
                'logo'=>'uploads/stores/viva.png'
            ],
            [
               'id'=>'10',
               'name'=>'Điện Máy HC',
                'short_name'=>'hcenter',
                'logo'=>'uploads/stores/homecenter.png'
            ],
            [
                'id'=>'11',
                'name'=>'Leflair',
                'short_name'=>'leflair',
                'logo'=>'uploads/stores/le.png'
            ],
            [
                'id'=>'12',
                'name'=>'Gotadi',
                'short_name'=>'gotadi',
                'logo'=>'uploads/stores/gotadi.png'
            ],
            [
                'id'=>'13',
                'name'=>'Viễn Thông A',
                'short_name'=>'vienthonga',
                'logo'=>'uploads/stores/vienthonga.png'
            ],
            [
                'id'=>'14',
                'name'=>'lotte',
                'short_name'=>'Lotte',
                'logo'=>'uploads/stores/lotte.png'
            ],
            [
                'id'=>'15',
                'name'=>'Fiditour',
                'short_name'=>'fiditour',
                'logo'=>'uploads/stores/fidi.png'
            ],
            [
                'id'=>'16',
                'name'=>'Unicom',
                'short_name'=>'unicom',
                'logo'=>'uploads/stores/uni.jpg'
            ],
            [
                'id'=>'17',
                'name'=>'A Đây Rồi',
                'short_name'=>'adayroi',
                'logo'=>'uploads/stores/adayroi.png'
            ],
            [
                'id'=>'18',
                'name'=>'The Face Shop',
                'short_name'=>'thefaceshop',
                'logo'=>'uploads/stores/theface.png'
            ],
            [
                'id'=>'19',
                'name'=>'Rio Book',
                'short_name'=>'riobook',
                'logo'=>'uploads/stores/rio.jpg'
            ],



        ];

        foreach($data as $record) {
            $record['slug'] = str_slug($record['name'],'-').'-'.$record['id'];
            Site::create($record);
        }

    }
}
