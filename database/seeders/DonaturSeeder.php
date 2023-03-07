<?php

namespace Database\Seeders;

use App\Models\Donatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donatur::create([
            'id' => '1',
            'donatur_name' => 'Bagdo',
            'phone' => '086578273872',
            'address' => 'Jln. Rinjani',
            'job' => 'Pengusaha'
        ]);
        Donatur::create([
            'id' => '2',
            'donatur_name' => 'Fajar',
            'phone' => '087263746271',
            'address' => 'Jln. Tentara Pelajar',
            'job' => 'Pengusaha'
        ]);
        Donatur::create([
            'id' => '3',
            'donatur_name' => 'Titin',
            'phone' => '089827384728',
            'address' => 'Jln. Gatot Soebroto',
            'job' => 'Apoteker'
        ]);

    }
}
