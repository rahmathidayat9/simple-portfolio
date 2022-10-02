<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'title' => 'About Title',
                'description' => 'Description lorem ipsum dolor sit amet',
                'image' => 'image.jpg',
                'name' => 'My Name',
                'email' => 'email@about.com',
                'role' => '1',
                'phone' => '6282277336644',
                'is_active' => '1',
            ],
        ]);
    }
}