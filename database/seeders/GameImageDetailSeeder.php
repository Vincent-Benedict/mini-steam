<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameImageDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_image_details')->insert([
            'game_id'=> 1,
            'img_id' => 1
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 1,
            'img_id' => 2
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 1,
            'img_id' => 3
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 2,
            'img_id' => 4
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 2,
            'img_id' => 5
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 2,
            'img_id' => 6
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 3,
            'img_id' => 7
        ]);

        DB::table('game_image_details')->insert([
            'game_id'=> 3,
            'img_id' => 8
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 3,
            'img_id' => 9
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 4,
            'img_id' => 10
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 4,
            'img_id' => 11
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 4,
            'img_id' => 12
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 5,
            'img_id' => 13
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 5,
            'img_id' => 14
        ]);

        DB::table('game_image_details')->insert([
            'game_id'=> 5,
            'img_id' => 15
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 6,
            'img_id' => 16
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 6,
            'img_id' => 17
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 6,
            'img_id' => 18
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 7,
            'img_id' => 19
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 7,
            'img_id' => 20
        ]);
        DB::table('game_image_details')->insert([
            'game_id'=> 7,
            'img_id' => 21
        ]);
    }
}
