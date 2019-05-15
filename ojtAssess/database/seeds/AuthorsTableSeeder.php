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
            'name' => 'Ezekiel Tarranza'
        ]);
        DB::table('authors')->insert([
            'name' => 'Liam Maata'
        ]);
        DB::table('authors')->insert([
            'name' => 'Juliane Sering'
        ]);
        DB::table('authors')->insert([
            'name' => 'Denver Alibee'
        ]);
    }
}
