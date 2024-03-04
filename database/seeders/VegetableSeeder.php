<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vegetables')->insert(array(
            array(
                'nama-sayur' => 'Brokoli',
                'harga'     => '20000'
            ),
            array(
                'nama-sayur' => 'Sawi',
                'harga'     => '20000'
            ),
            array(
                'nama-sayur' => 'Wortel',
                'harga'     => '20000'
            ),
        ));
    }
}
