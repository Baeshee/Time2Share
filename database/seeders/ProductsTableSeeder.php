<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Orange calculator',
            'owner_email' => "s1118301@student.hsleiden.nl",
            'description' => 'Orange calculator, works like a charm.',
            'image' => '/img/orange_calculator.jpg',
            'status' => 'Available',
        ]);

        DB::table('products')->insert([
            'name' => 'Bicycle',
            'owner_email' => "rogar@gmail.com",
            'description' => 'Red bicycle, in good shape',
            'image' => '/img/red_bicycle.jpg',
            'status' => 'Unavailable',
        ]);

        DB::table('products')->insert([
            'name' => 'Kirby 24 Anniversairy Book',
            'owner_email' => "s1118301@student.hsleiden.nl",
            'description' => 'Book with all art of each released Kirby game, made for the 24 year Anniversairy',
            'image' => '/img/anniversary_kirby.jpg',
            'status' => 'Available',
        ]);

        DB::table('products')->insert([
            'name' => 'Skateboard',
            'owner_email' => "s1113893@student.hsleiden.nl",
            'description' => 'Skateboard with a city skyline deck',
            'image' => 'https://img.freepik.com/free-psd/colorful-skateboards-floor_23-2148272654.jpg?size=626&ext=jpg',
            'status' => 'Available',
        ]);

        DB::table('products')->insert([
            'name' => 'Final Fantasy XV',
            'owner_email' => "toby@gmail.com",
            'description' => 'Final Fantasy XV for the ps4, day one edition',
            'image' => 'https://media.s-bol.com/BKMR7rAKn0N/961x1200.jpg',
            'status' => 'Available',
        ]);

        DB::table('products')->insert([
            'name' => 'PC Monitor',
            'owner_email' => "ewout@gmail.com",
            'description' => '27" Lenovo monitor',
            'image' => 'https://www.dealstracker.nl/wp-content/uploads/product-lenovo-65e6kac1eu-27-inch-full-hd-ips-monitor-usb-c.jpg',
            'status' => 'Available',
        ]);
    }
}
