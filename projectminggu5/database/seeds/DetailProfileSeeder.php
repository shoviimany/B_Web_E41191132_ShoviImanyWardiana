<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Sumenep',
            'no_telp' => '087654321234',
            'ttl' => '2002-04-09',
            'foto' => 'picturepho'
        ]);
    }
}
