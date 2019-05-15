<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre' => 'Classics'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Action & Adventure'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Mystery, Thriller and Suspense'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Literary Fiction'
        ]);
    }
}
