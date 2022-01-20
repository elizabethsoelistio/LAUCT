<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(10)->create();

        DB::table('users')->insert([
            ['role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'gender' => 'female',
            'password' => bcrypt('password')],

            ['role_id' => 2,
            'name' => 'Customer',
            'email' => 'customer@customer.com',
            'gender' => 'male',
            'password' => bcrypt('password')],

            ['role_id' => 2,
            'name' => 'Other Customer',
            'email' => 'mermer@customer.com',
            'gender' => 'female',
            'password' => bcrypt('password')]
        ]);
    }
}
