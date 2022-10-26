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

        \App\Models\User::factory()->create([
            'name' => 'Usuario de prueba',
            'email' => 'test@gmail.com',
            'password' =>bcrypt('secret'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Rafael',
            'email' => 'rdbarrios@hotmail.com',
            'password' =>bcrypt('secret'),
        ]);

        $this->call([
            ProductSeeder::class
        ]);
    }
}
