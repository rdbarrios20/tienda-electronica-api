<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'TV',
            'trade_mark' => 'Sansung',
            'description' => 'Televisor de 24 " smart tv',
            'amount' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'TV',
            'trade_mark' => 'LG',
            'description' => 'Televisor de 24 " smart tv',
            'amount' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Lavadora',
            'trade_mark' => 'LG',
            'description' => 'Lavadora de 24 lts',
            'amount' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Estufa',
            'trade_mark' => 'Mabe',
            'description' => 'Estuva de 4 puestos',
            'amount' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Aire acondicionado',
            'trade_mark' => 'Wirlpool',
            'description' => 'Aire acondicionado de 1 caballo',
            'amount' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Licuadora',
            'trade_mark' => 'Oster',
            'description' => 'Licuadora de 5 velocidades',
            'amount' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Equipo de sonido',
            'trade_mark' => 'Panasonic',
            'description' => 'Equipo de sonido con subwoofer',
            'amount' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Ventilador de pared',
            'trade_mark' => 'Samurai',
            'description' => 'Ventilador silencioso',
            'amount' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Computador portatil',
            'trade_mark' => 'Hp',
            'description' => 'Computador portatil core i7 12 de Ram',
            'amount' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Barra de sonido',
            'trade_mark' => 'Logitech',
            'description' => 'Barra de sonido bluetooth',
            'amount' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Teclado inalambrico',
            'trade_mark' => 'Logitech',
            'description' => 'Teclado y mouse inalambricos',
            'amount' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Parlantes para PC',
            'trade_mark' => 'Genius',
            'description' => 'Parlantes 3.5 para PC',
            'amount' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Camaras de vigilancia',
            'trade_mark' => 'Dawa',
            'description' => 'Carama de video de 720px',
            'amount' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Targeta grafica',
            'trade_mark' => 'Nvidia',
            'description' => 'Targeta grafica Nvidia DDR5, 4Gs GTX3060TI',
            'amount' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Disco duro',
            'trade_mark' => 'Crucial',
            'description' => 'Disco duro M2 Nvme',
            'amount' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
