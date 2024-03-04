<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Fruit::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ini kebaca lagi karna tadi kan udah di running trus di php artisan db:seed lagi makanya jadi kebaca, 
        //kalo mau di comment dulu biar ga kebaca

        $this->call([
            FruitSeeder::class,
        ]);
    }
}
