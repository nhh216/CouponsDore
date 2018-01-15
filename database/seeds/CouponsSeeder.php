<?php

use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons = [
//            [
//                'id'=>'1',
//                'title'=>'Mã Giảm 10% Cho Đơn Hàng Gia Dụng Từ 400K Tại Adayroi',
//                'code'=>'ADAYROI400',
//                'description' =>'Tặng tối đa 200.000đ- Không áp dụng hóa mỹ phẩm tẩy rửa , xe máy, bỉm.',
//                'thumb'=>'uploads/stores/adayroi.jpg'
//            ],
//            [
//                'id'=>'2',
//                'title'=>'Tân Trang Nhà Bếp Cùng Đồ Gia Dụng Sunhouse – Voucher Lazada Giảm Thêm 10%',
//                'code'=>'LAPTOPGAMING',
//                'description' =>'Nhập mã giảm ngay 1 triệu đồng – Áp dụng cho sản phẩm trong trang khuyến mạ.',
//                'thumb'=>'uploads/stores/lazada-logo.png'
//            ],
//            [
//                'id'=>'3',
//                'title'=>'Voucher Giảm 10% Cho Thiết Bị Lưu Trữ Tại Shopee App',
//                'code'=>'SHOPEEAPP2018',
//                'description' =>'Nhập mã giảm 10% – Tối đa 200.000đ cho hàng công nghệ thương hiệu Energizer Store.',
//                'thumb'=>'uploads/stores/shopee.jpg'
//            ],
            [
                'id'=>'4',
                'title'=>'Tân Trang Nhà Bếp Cùng Đồ Gia Dụng Sunhouse – Voucher Lazada Giảm Thêm 10%p',
                'code'=>'NHABEP2018',
                'description' =>'Nhập mã giảm 10% – Tối đa 150.000đ cho đồ gia dụng Sunhouse.',
                'thumb'=>'uploads/stores/lazada-logo.jpg'
            ],
            [
                'id'=>'5',
                'title'=>'Laptop Intel Giảm Ngay 1 Triệu Khi Nhập Mã Giảm Giá Tại Lazada',
                'code'=>'ITEL2018',
                'description' =>'Nhập mã giảm ngay 1 triệu đồng – Áp dụng cho sản phẩm trong trang khuyến mại.',
                'thumb'=>'uploads/stores/lazada-logo.jpg'
            ],
            [
                'id'=>'6',
                'title'=>'Voucher Lazada Giảm 2.2 Triệu Cho Samsung Galaxy Note 8 64GB',
                'code'=>'GALAXY64GB',
                'description' =>'Nhập mã giảm thêm 2.248.000 VND – Chỉ đến 16/1/2018 – Hàng mới, chính hãng, nguyên seal 100%.',
                'thumb'=>'uploads/stores/lazada-logo.jpg'
            ],
            [
                'id'=>'7',
                'title'=>'Lazada- Mã Giảm Giá 15% Cho Đồ Điện Tử, Bóng Đèn Điện Quang',
                'code'=>'115%DODIEN',
                'description' =>'Nhập mã giảm 15% – Tối đa 150.000đ cho điện tử Điện Quang – Đến hết 17/1 .',
                'thumb'=>'uploads/stores/lazada-logo.jpg'
            ],
        ];

        foreach ($coupons as $items)
        {
            DB::table('coupons')->insert($items);
        }

    }
}
