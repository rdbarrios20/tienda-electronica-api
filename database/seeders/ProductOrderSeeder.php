<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_orders')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 1,
            'product_id' => 3,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 2,
            'product_id' => 6,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 3,
            'product_id' => 7,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 3,
            'product_id' => 14,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 4,
            'product_id' => 1,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 5,
            'product_id' => 10,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 6,
            'product_id' => 11,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 7,
            'product_id' => 4,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 7,
            'product_id' => 6,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 8,
            'product_id' => 13,
            'amount_ordered' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 9,
            'product_id' => 2,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 9,
            'product_id' => 15,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 10,
            'product_id' => 5,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 11,
            'product_id' => 14,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 12,
            'product_id' => 11,
            'amount_ordered' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 12,
            'product_id' => 12,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 13,
            'product_id' => 9,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 14,
            'product_id' => 8,
            'amount_ordered' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_orders')->insert([
            'order_id' => 15,
            'product_id' => 1,
            'amount_ordered' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
