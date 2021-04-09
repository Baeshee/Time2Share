<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatergoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_array= ['Games', 'Transportation', 'Electronics', 'Books', 'Toys'];

        foreach($categories_array as $category){
            DB::table('categories')->insert([
                'category' => $category,
            ]);
        }
    }
}
