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
               'name'=>'Lazada'
           ],
            [
                'id'=>'2',
                'name'=>'Shopee'
            ],
            [
                'id'=>'3',
                'name'=>'Yes24'
            ],
            [
                'id'=>'4',
                'name'=>'FPT Shop'
            ],
            [
                'id'=>'5',
                'name'=>'Huggie'
            ],
            [
                'id'=>'6',
                'name'=>'VinGroup'
            ],
        ];

        foreach ($data as $value)
        {
            DB::table('sites')->insert($value);
        }

    }
}
