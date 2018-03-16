<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => integer(4),
            'stock' => integer(20),
        ]);
      */

      for($i=0; $i<20; $i++){
        $product = new Product;
        $product->name = str_random(10);
        $product->price = rand(2000, 4000);
        $product->stock = rand(10, 50);
        $product->save();
      }
    }
}
