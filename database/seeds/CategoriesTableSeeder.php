<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        'product_id' => 1,
        'name' => 'book',
        'created_at' => NOW(),
        'updated_at' => NOW()
      ]);
    }
}
