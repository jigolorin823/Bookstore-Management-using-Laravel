<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'jigo',
            'email' => 'jigo@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => '2'
        ]);
    }
}
