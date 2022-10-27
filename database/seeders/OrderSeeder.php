<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'client_id' => 1,
            'delivery_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 2,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 3,
            'delivery_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 4,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 5,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 6,
            'delivery_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 7,
            'delivery_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 8,
            'delivery_date' => new Carbon('next monday'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 9,
            'delivery_date' => new Carbon('next monday'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 10,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 11,
            'delivery_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 12,
            'delivery_date' => new Carbon('next monday'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 13,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 14,
            'delivery_date' => new Carbon('next monday'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'client_id' => 15,
            'delivery_date' => new Carbon('tomorrow'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
