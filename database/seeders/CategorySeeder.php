<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['category_name' => 'Bags'],
            ['category_name' => 'Shoes'],
            ['category_name' => 'Ready Ware'],
            ['category_name' => 'Tableware'],
            ['category_name' => 'Accessories'],
        ]);
    }
}
