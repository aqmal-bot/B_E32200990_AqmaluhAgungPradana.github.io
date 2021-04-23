<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Supoort\Facades\DB;
use App\Model\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name' => 'aqmalagung',
            'email' => 'aqmalagung@gmail.com',
            'password' => bcrypt(19122001),
        ]);
    }
}