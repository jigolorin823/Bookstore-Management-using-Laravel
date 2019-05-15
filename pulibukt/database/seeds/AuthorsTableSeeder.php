<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Haruki Murakami'
        ]);
        DB::table('authors')->insert([
            'name' => 'Roald Dahl'
        ]);
        DB::table('authors')->insert([
            'name' => 'Paulo Coelho'
        ]);
        
    }
}
