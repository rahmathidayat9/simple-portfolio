<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
       		[
            'name' => 'Rahmat Hidayat',
         		'email' => 'rahmat@gmail.com',
         		'password' => \Hash::make('password')
          ],
          [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('password')
          ],	
       ]); 
    }	
}
