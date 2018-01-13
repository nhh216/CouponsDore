<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $catList=[
//            [
//                'id'=>'1',
//                'name'=>'Danh Mục'
//
//            ],
//            [
//                'id'=>'2',
//                'name'=>'Thương Hiệu'
//            ],
//                [
//                    'id'=>'3',
//                    'name'=>'Lazada',
//                    'parent_id'=>'2'
//                ],
//                [
//                    'id'=>'4',
//                    'name'=>'Shopee',
//                    'parent_id'=>'2'
//                ],
//                [
//                    'id'=>'5',
//                    'name'=>'Fpt Shop',
//                    'parent_id'=>'2'
//                ],
//                [
//                    'id'=>'6',
//                    'name'=>'Yes24',
//                    'parent_id'=>'2'
//                ],
//                [
//                    'id'=>'7',
//                    'name'=>'Tiki.vn',
//                    'parent_id'=>'2'
//                ],
//                [
//                    'id'=>'8',
//                    'name'=>'Thế Giới Di Động',
//                    'parent_id'=>'2'
//                ],
//


        ];

        foreach ($catList as $value)
        {
            DB::table('categories')->insert($value);
        }

    }

}
