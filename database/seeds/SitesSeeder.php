<?php

use Illuminate\Database\Seeder;

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
               'short_name'=>'lazada'
           ],
            [
                'id'=>'2',
                'name'=>'Shopee',
                'short_name'=>'shopee'
            ],
            [
                'id'=>'3',
                'name'=>'Yes24',
                'short_name'=>'yes24'
            ],
            [
                'id'=>'4',
                'name'=>'FPT Shop',
                'short_name'=>'fptshop'
            ],
            [
                'id'=>'5',
                'name'=>'Huggie',
                'short_name'=>'huggie'
            ],
            [
                'id'=>'6',
                'name'=>'VinGroup',
                'short_name'=>'vingroup'
            ],
            [
                'id'=>'7',
                'name'=>'Fpt Play',
                'short_name'=>'fptplay'
            ],
            [
                'id'=>'8',
                'name'=>'Aeone Shop',
                'short_name'=>'aeoneshop'
            ],
            [
                'id'=>'9',
                'name'=>'Vi Va Vi Vu',
                'short_name'=>'vivavivu'
            ],
            [
               'id'=>'10',
               'name'=>'Điện Máy HC',
                'short_name'=>'hcenter'
            ],
            [
                'id'=>'11',
                'name'=>'Leflair',
                'short_name'=>'leflair'
            ],
            [
                'id'=>'12',
                'name'=>'Gotadi',
                'short_name'=>'gotadi'
            ],
            [
                'id'=>'13',
                'name'=>'Viễn Thông A',
                'short_name'=>'vienthonga'
            ],
            [
                'id'=>'14',
                'name'=>'lotte',
                'short_name'=>'Lotte'
            ],
            [
                'id'=>'15',
                'name'=>'Fiditour',
                'short_name'=>'fiditour'
            ],
            [
                'id'=>'16',
                'name'=>'Unicom',
                'short_name'=>'unicom'
            ],
            [
                'id'=>'17',
                'name'=>'A Đây Rồi',
                'short_name'=>'adayroi'
            ],
            [
                'id'=>'18',
                'name'=>'The Face Shop',
                'short_name'=>'thefaceshop'
            ],
            [
                'id'=>'19',
                'name'=>'Rio Book',
                'short_name'=>'riobook'
            ],



        ];

        foreach ($data as $value)
        {
            DB::table('sites')->insert($value);
        }

    }
}
