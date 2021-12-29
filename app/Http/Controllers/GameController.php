<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function home()
    {
        $featuredGames = DB::table('games')->inRandomOrder()->limit(5)->get();
        $specialGames = DB::table('games')->where('discount', '>', 0)->orderBy('discount', 'desc')->limit(6)->get();
        $newGames = DB::table('games')->orderBy('created_at', 'desc')->limit(5)->get();
        $topSellerGames = DB::table('games')->orderBy('seller', 'desc')->limit(5)->get();
        $freeGames = DB::table('games')->where('price', '=', 0)->limit(5)->get();
        $tags = DB::table('game_tag_details')->join('tags', 'game_tag_details.tag_id', '=', 'tags.id')->select('game_tag_details.game_id', 'tags.name')->get();
        $pictures = DB::table('game_image_details')->join('game_images', 'game_image_details.img_id', 'game_images.id')->select('game_image_details.game_id', 'game_images.image')->get();
        return view('home')->with('featuredGames', $featuredGames)
                            ->with('specialGames', $specialGames)
                            ->with('newGames', $newGames)
                            ->with('topSellerGames', $topSellerGames)
                            ->with('freeGames', $freeGames)
                            ->with('tags', $tags)
                            ->with('pictures', $pictures);
    }

    public function pointShop(){

        $avatars = DB::table('items')->where('category', '=', 'avatar')->get();
        $frames = DB::table('items')->where('category', '=', 'frame')->get();
        $profiles = DB::table('items')->where('category', '=', 'profile')->get();
        $badges = DB::table('items')->where('category', '=', 'badge')->get();
        $stickers = DB::table('items')->where('category', '=', 'sticker')->get();
        return view('point-shop')->with('avatars', $avatars)
                                 ->with('frames', $frames)
                                 ->with('profiles', $profiles)
                                 ->with('badges', $badges)
                                 ->with('stickers', $stickers);
    }

    public function detail($id){

        $game = DB::table('games')->where('id', '=', $id)->first();
        $pictures = DB::table('game_image_details')->join('game_images', 'game_image_details.img_id', 'game_images.id')->where('game_image_details.game_id', '=', $id)->select('game_image_details.game_id', 'game_images.image')->get();
        $tags = DB::table('game_tag_details')->join('tags', 'game_tag_details.tag_id', '=', 'tags.id')->where('game_tag_details.game_id', '=', $id)->select('game_tag_details.game_id', 'tags.name')->get();

        return view('detail')->with('game', $game)
                             ->with('pictures', $pictures)
                             ->with('tags', $tags);
    }
}
