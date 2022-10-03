<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'title' => 'Title',
                'navbar_title' => 'Navbar Title',
                'up_text' => 'Up Text',
                'down_text' => 'Down Text',
                'image' => 'image.jpg',
                'is_active' => '1'
            ],
        ]);
    }
}