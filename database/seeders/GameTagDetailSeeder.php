<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTagDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_tag_details')->insert([
            'game_id'=> 1,
            'tag_id'=> 1
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 1,
            'tag_id'=> 2
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 1,
            'tag_id'=> 3
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 2,
            'tag_id'=> 1
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 2,
            'tag_id'=> 2
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 3,
            'tag_id'=> 3
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 3,
            'tag_id'=> 4
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 4,
            'tag_id'=> 2
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 4,
            'tag_id'=> 4
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 4,
            'tag_id'=> 6
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 5,
            'tag_id'=> 5
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 5,
            'tag_id'=> 6
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 6,
            'tag_id'=> 2
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 6,
            'tag_id'=> 1
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 7,
            'tag_id'=> 1
        ]);
        DB::table('game_tag_details')->insert([
            'game_id'=> 7,
            'tag_id'=> 3
        ]);
        
    }
}
