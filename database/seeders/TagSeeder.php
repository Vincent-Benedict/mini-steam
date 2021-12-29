<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name'=>'Building'
        ]);
        DB::table('tags')->insert([
            'name'=>'Indie'
        ]);
        DB::table('tags')->insert([
            'name'=>'Strategy'
        ]);
        DB::table('tags')->insert([
            'name'=>'Action'
        ]);
        DB::table('tags')->insert([
            'name'=>'Adventure'
        ]);
        DB::table('tags')->insert([
            'name'=>'Nudity'
        ]);
        
    }
}
