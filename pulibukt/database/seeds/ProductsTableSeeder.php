<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'book_id' => '1',
            'quantity' => '10',
            'price' => '384.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '2',
            'quantity' => '10',
            'price' => '376.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '3',
            'quantity' => '10',
            'price' => '376.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '4',
            'quantity' => '10',
            'price' => '629.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '5',
            'quantity' => '10',
            'price' => '752.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '6',
            'quantity' => '10',
            'price' => '715.00',
        ]);
        DB::table('products')->insert([
            'book_id' => '7',
            'quantity' => '10',
            'price' => '816.00',
        ]);
    }
}
