<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_images')->insert([
            'image'=>'game1-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game1-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game1-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game2-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game2-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game2-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game3-detail1.jpg'
        ]);

        DB::table('game_images')->insert([
            'image'=>'game3-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game3-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game4-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game4-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game4-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game5-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game5-detail2.jpg'
        ]);

        DB::table('game_images')->insert([
            'image'=>'game5-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game6-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game6-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game6-detail3.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game7-detail1.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game7-detail2.jpg'
        ]);
        DB::table('game_images')->insert([
            'image'=>'game7-detail3.jpg'
        ]);
        
    }
}
