<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
            \App\Models\Client::factory(15)->create();
            \App\Models\Provider::factory(6)->create();

        \App\Models\User::factory()->create([
            'name' => 'Usuario de prueba',
            'email' => 'test@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Rafael',
            'email' => 'rdbarrios@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        $this->call([
            ProductSeeder::class,
            OrderSeeder::class,
            ProductOrderSeeder::class
        ]);
    }
}
