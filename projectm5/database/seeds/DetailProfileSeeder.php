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
        DB:: table('detail_profile')->insert([
            'address' => 'Sumenep',
            'nomor_telp' => '08765432123',
            'ttl' => '2000-11-01',
            'foto' => 'picture.png'

        ]);
    }
}
