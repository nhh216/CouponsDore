<?php

use Illuminate\Database\Seeder;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $this->call(CategoriesSeeder::class);
          $this->call(SitesSeeder::class);
//        $this->call(CouponsSeeder::class);
        $this->call(UserSeeder::class);
    }
}
