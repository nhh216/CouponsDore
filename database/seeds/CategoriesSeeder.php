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
                'id'=>'2',
                'name'=>'Sách',
                'parent_id'=>'1'

            ],
            [
                 'id'=>'4',
                 'name'=>'Nội thất',
                 'parent_id'=>'1'
            ],
             [
                 'id'=>'5',
                 'name'=>'Điện thoại di động',
                 'parent_id'=>'1'
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
            [
                'id'=>'15',
                'name'=>'Du lịch',
                'parent_id'=>'1'
            ],
            [
                'id'=>'16',
                'name'=>'Travel',
                'parent_id'=>'1'
            ],
            [
                'id'=>'17',
                'name'=>'Điện tử',
                'parent_id'=>'1'
            ],
            [
                'id'=>'18',
                'name'=>'Nhà cửa và đời sống',
                'parent_id'=>'1'
            ],
            [
                'id'=>'19',
                'name'=>'Điện gia dụng',
                'parent_id'=>'1'
            ],
            [
                'id'=>'21',
                'name'=>'Phụ kiện',
                'parent_id'=>'1'
            ],
            [
                'id'=>'22',
                'name'=>'Dịch vụ',
                'parent_id'=>'1'
            ],
            [
                'id'=>'23',
                'name'=>'Các Ngành Hàng',
                'parent_id'=>'1'
            ],
            [
                'id'=>'24',
                'name'=>'Tổng Hợp',
                'parent_id'=>'1'
            ],
            [
                'id'=>'25',
                'name'=>'Khác',
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
