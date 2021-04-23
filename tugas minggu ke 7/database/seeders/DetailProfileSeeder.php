<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai

        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '082234948411',
            'ttl' => '2001-12-19',
            'foto' => 'picture.png',
        ]);
    }
}
