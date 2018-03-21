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
      for($i=0; $i<1; $i++){
        DB::table('users')->insert([
            'username' => str_random(10),
            'password' => bcrypt('secret'),
            'email' => str_random(10).'@gmail.com',
            'phone_number' => str_random(5),
            'role' => str_random(10),
        ]);
      }
    }
}
