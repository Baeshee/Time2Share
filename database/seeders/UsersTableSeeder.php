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
            'name' => 'User',
            'email' => 'email@email.com',
            'password' => bcrypt('laravel'),
            'role' => 'Admin',
        ]);

        DB::table('users')->insert([
            'name' => 'User2',
            'email' => 'email@email.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'User3',
            'email' => 'email@email.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'User4',
            'email' => 'email@email.com',
            'password' => bcrypt('laravel'),
        ]);

        DB::table('users')->insert([
            'name' => 'User5',
            'email' => 'email@email.com',
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
