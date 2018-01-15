<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

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
            [
                'id'=>'1',
                'name'=>'Danh Mục'

            ],

                [
                    'id'=>'9',
                    'name'=>'Ẩm Thực',
                    'parent_id'=>'1'
                ],
                [
                    'id'=>'10',
                    'name'=>'Công Nghệ',
                    'parent_id'=>'1'
                ],
                [
                    'id'=>'11',
                    'name'=>'Gia Dụng',
                    'parent_id'=>'1'
                ],
                [
                    'id'=>'12',
                    'name'=>'Mẹ và Bé',
                    'parent_id'=>'1'
                ],
                [
                    'id'=>'13',
                    'name'=>'Thời Trang',
                    'parent_id'=>'1'
                ],
                [
                    'id'=>'14',
                    'name'=>'Văn Phòng Phẩm',
                    'parent_id'=>'1'
                ],



        ];

        $list = Category::all();
        foreach($list as $val) {
            $val->slug = str_slug($val->name, '-').'-'.$val->id;
            $val->save();
        }

        foreach ($catList as $value)
        {
            DB::table('categories')->insert($value);
        }

    }

}
