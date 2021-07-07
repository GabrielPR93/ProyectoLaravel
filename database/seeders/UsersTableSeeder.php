<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([ 
            'name' => 'Admin', 
            'email' => 'admin@hotmail.com', 
            'password' => bcrypt('12345678'),
            'rol'=>0]);

            \DB::table('users')->insert([ 
                'name' => 'Gabri', 
                'email' => 'gabriel@hotmail.com', 
                'password' => bcrypt('12345678'),
                'rol'=>1]);
    }
}
