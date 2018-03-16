<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0; $i<20; $i++){
      DB::table('suppliers')->insert([
          'name' => str_random(10),
          'address' => str_random(23),
          'phone' => str_random(12),
      ]);
    }
      /*
        $supplier = new Supplier;
        $supplier->name = str_random(10);
        $supplier->address = str_random(23);
        $supplier->phone = str_random(12);
        $supplier->save();
      */
    }
}
