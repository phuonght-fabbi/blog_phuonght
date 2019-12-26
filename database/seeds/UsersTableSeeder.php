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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',  
            'password' => '$2y$10$jTpy4mJXI8alQ8pJtsMoLuGWKz.iy2SjSze209v/tttj3nP5MjSMq',      //testtest
            'level' => '1',
        ]);
    }
}
