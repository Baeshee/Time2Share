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
            'name' => 'Calculator',
            'owner_email' => "email@email.com",
            'description' => 'Calculator, works like a charm.',
            'image' => '/img/calculator.jpg',
            'category' => 'Electronics',
        ]);

        DB::table('products')->insert([
            'name' => 'Bicycle',
            'owner_email' => "email@email.com",
            'description' => 'Red bicycle, in good shape',
            'image' => '/img/red_bicycle.jpg',
            'category' => 'Transportation',
        ]);

        DB::table('products')->insert([
            'name' => 'Kirby 24 Anniversairy Book',
            'owner_email' => "email@email.com",
            'description' => 'Book with all art of each released Kirby game, made for the 24 year Anniversairy',
            'image' => '/img/anniversary_kirby.jpg',
            'category' => 'Books',
        ]);

        DB::table('products')->insert([
            'name' => 'Skateboard',
            'owner_email' => "email@email.com",
            'description' => 'Skateboard with a city skyline deck',
            'image' => 'https://img.freepik.com/free-psd/colorful-skateboards-floor_23-2148272654.jpg?size=626&ext=jpg',
            'category' => 'Transportation',
        ]);

        DB::table('products')->insert([
            'name' => 'Final Fantasy XV',
            'owner_email' => "email@email.com",
            'description' => 'Final Fantasy XV for the ps4, day one edition',
            'image' => 'https://media.s-bol.com/BKMR7rAKn0N/961x1200.jpg',
            'category' => 'Games',
        ]);

        DB::table('products')->insert([
            'name' => 'PC Monitor',
            'owner_email' => "email@email.com",
            'description' => '27" Lenovo monitor',
            'image' => 'https://www.dealstracker.nl/wp-content/uploads/product-lenovo-65e6kac1eu-27-inch-full-hd-ips-monitor-usb-c.jpg',
            'category' => 'Electronics',
        ]);
    }
}
