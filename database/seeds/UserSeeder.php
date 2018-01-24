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
            'name'=>'huy hung',
            'email'=>'nhh.216@gmail.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin123')
        ];

        DB::table('users')->insert($data);
    }
}
