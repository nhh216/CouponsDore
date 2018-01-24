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
//            [
//                'id'=>'4',
//                'title'=>'Tân Trang Nhà Bếp Cùng Đồ Gia Dụng Sunhouse – Voucher Lazada Giảm Thêm 10%p',
//                'code'=>'NHABEP2018',
//                'site_id'=>1,
//                'description' =>'Nhập mã giảm 10% – Tối đa 150.000đ cho đồ gia dụng Sunhouse.',
//                'thumb'=>'uploads/stores/lazada-logo.png'
//            ],
//            [
//                'id'=>'5',
//                'title'=>'Laptop Intel Giảm Ngay 1 Triệu Khi Nhập Mã Giảm Giá Tại Lazada',
//                'code'=>'ITEL2018',
//                'site_id'=>1,
//                'description' =>'Nhập mã giảm ngay 1 triệu đồng – Áp dụng cho sản phẩm trong trang khuyến mại.',
//                'thumb'=>'uploads/stores/lazada-logo.png'
//            ],
//            [
//                'id'=>'6',
//                'title'=>'Voucher Lazada Giảm 2.2 Triệu Cho Samsung Galaxy Note 8 64GB',
//                'code'=>'GALAXY64GB',
//                'site_id'=>1,
//                'description' =>'Nhập mã giảm thêm 2.248.000 VND – Chỉ đến 16/1/2018 – Hàng mới, chính hãng, nguyên seal 100%.',
//                'thumb'=>'uploads/stores/lazada-logo.png'
//            ],
//            [
//                'id'=>'7',
//                'title'=>'Lazada- Mã Giảm Giá 15% Cho Đồ Điện Tử, Bóng Đèn Điện Quang',
//                'code'=>'115%DODIEN',
//                'site_id'=>1,
//                'description' =>'Nhập mã giảm 15% – Tối đa 150.000đ cho điện tử Điện Quang – Đến hết 17/1 .',
//                'thumb'=>'uploads/stores/lazada-logo.png'
//            ],
            [
                'id'=>'8',
                'title'=>'Mã giảm giá Shopee giảm 20K cho đơn hàng túi ví nữ từ 99K',
                'code'=>'20TO99K',
                'site_id'=>2,
                'description' =>'Chỉ áp dụng trên Shopee app. Sử dụng cho các sản phẩm trong trang khuyến mãi .',
                'thumb'=>'uploads/stores/shopee.jpg'
            ],
            [
                'id'=>'9',
                'title'=>'Shopee giảm 10% cho hàng nhà cửa đời sống',
                'code'=>'10%SONGSAO',
                'site_id'=>2,
                'description' =>'Giảm thêm 10% tối đa 50K cho đơn hàng từ 300K. Chỉ áp dụng trên shopee app, áp dụng 1 số sản phẩm .',
                'thumb'=>'uploads/stores/shopee.jpg'
            ],
            [
                'id'=>'10',
                'title'=>'Coupon Shopee giảm 15% cho đơn hàng đồng hồ',
                'code'=>'15%DONGHO',
                'site_id'=>2,
                'description' =>'Nhập mã giảm 15% – Tối đa 150.000đ cho điện tử Điện Quang – Đến hết 17/1 .',
                'thumb'=>'uploads/stores/shopee.jpg'
            ],
            [
                'id'=>'11',
                'title'=>'Coupon Tiki giảm 300K khi mua xe điện.',
                'code'=>'MTXANHDD',
                'site_id'=>8,
                'description' =>'Áp dụng hầu hết xe điện trên Tiki.',
                'thumb'=>'uploads/stores/tiki.png'
            ],
            [
                'id'=>'12',
                'title'=>'Mã giảm giá Tiki giảm thêm 1.000.000đ khi mua xe máy',
                'code'=>'XEMAYGIATOT',
                'site_id'=>8,
                'description' =>'Số lượng và thời gian có hạn.',
                'thumb'=>'uploads/stores/tiki.png'
            ],
            [
                'id'=>'13',
                'title'=>'Coupon Tiki giảm 1.5 triệu cho Xiaomi Mi Mix 2.',
                'code'=>'MIMIX2SALE',
                'site_id'=>8,
                'description' =>'Giảm giá vào mỗi thứ 6 hàng tuần Hàng  .',
                'thumb'=>'uploads/stores/lazada-logo.png'
            ],
            [
                'id'=>'14',
                'title'=>'Mã giảm giá FPT Play Box 800k',
                'code'=>'FPTDODIEN',
                'site_id'=>4,
                'description' =>'Biến tivi nhà bạn thành smart Tivi với FPT Play..',
                'thumb'=>'uploads/stores/fpt.jpg'
            ],
            [
                'id'=>'15',
                'title'=>'Mã giảm giá FPT Play Box giảm 510k',
                'code'=>'510KFPT',
                'site_id'=>4,
                'description' =>'Áp dụng cho khách hàng mua trực tiếp trên website.',
                'thumb'=>'uploads/stores/fpt.jpg'
            ],
            [
                'id'=>'16',
                'title'=>'Sale Bứt Phá – Voucher Yes24.vn Giảm Thêm 12% Cho Mỗi Đơn Hàng Trên 800K',
                'code'=>'YES24SALE',
                'site_id'=>3,
                'description' =>'Nhập mã giảm 15% – Tối đa 150.000đ cho điện tử Điện Quang – Đến hết 17/1 .',
                'thumb'=>'uploads/stores/yes24-jpg.jpg'
            ],
            [
                'id'=>'17',
                'title'=>'Voucher Yes24 giảm 100k cho đơn hàng từ 1.300.000đ',
                'code'=>'YES24SALE1TR3',
                'site_id'=>3,
                'description' =>'Chỉ áp dụng cho Membership hàng Diamond..',
                'thumb'=>'uploads/stores/yes24-jpg.jpg'
            ],
            [
                'id'=>'18',
                'title'=>'Voucher Lazada- Mã Giảm 10% Cho Tã Bỉm Huggie',
                'code'=>'BIMXINHUGGIE',
                'site_id'=>3,
                'description' =>'Nhập mã giảm 10%- Tối đa 150.000đ .',
                'thumb'=>'uploads/stores/huggies.jpg'
            ],

        ];

        foreach ($coupons as $items)
        {
            DB::table('coupons')->insert($items);
        }

    }
}
