<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'=>'Huy Hùng',
            'email'=>'nhh.216@gmail.com',
            'full_name'=>'Nguyễn Huy Hùng',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin123')
        ];

        DB::table('users')->insert($data);
    }
}
