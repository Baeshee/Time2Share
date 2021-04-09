<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Bas',
            'email' => 's1118301@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
            'role' => 'Admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Max',
            'email' => 's1113893@student.hsleiden.nl',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Toby',
            'email' => 'toby@gmail.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ewout',
            'email' => 'ewout@gmail.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rogar',
            'email' => 'rogar@gmail.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'Admin',
        ]);
    }
}
