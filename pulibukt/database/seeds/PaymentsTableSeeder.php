<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'order_id' => '1',
            'card_num' => '123123',
            'address' => 'Davao City',
            'amount' => '1000'
        ]);
    }
}
