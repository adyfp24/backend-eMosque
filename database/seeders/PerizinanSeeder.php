<?php

namespace Database\Seeders;

use App\Models\Perizinan;
use Illuminate\Database\Seeder;

class PerizinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perizinans = [
            ['nama_perizinan' => 'pernikahan'],
            ['nama_perizinan' => 'pengajian'],
            ['nama_perizinan' => 'penyuluhan'],
            ['nama_perizinan' => 'hari besar'],
        ];

        foreach($perizinans as $perizinan){
            Perizinan::create($perizinan);
        }
    }
}
