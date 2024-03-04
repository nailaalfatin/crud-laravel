<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fruits')->insert(array(
            array(
                'nama_buah' => 'Apel',
                'harga'     => '20000'
            ),
            array(
                'nama_buah' => 'Anggur',
                'harga'     => '60000'
            ),
            array(
                'nama_buah' => 'Manggis',
                'harga'     => '10000'
            )
        ));
    }
}
