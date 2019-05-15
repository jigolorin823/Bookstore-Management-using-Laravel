<?php

use Illuminate\Database\Seeder;

class OrderlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderlines')->insert([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => '2'
        ]);
    }
}
