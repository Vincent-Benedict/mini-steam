<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'=> 'Zoolab',
            'category'=> 'avatar',
            'image'=> 'avatar-animated1.gif',
            'points'=> 1020
        ]);
        DB::table('items')->insert([
            'name'=> 'Sushi',
            'category'=> 'avatar',
            'image'=> 'avatar-animated2.gif',
            'points'=> 9050
        ]);
        DB::table('items')->insert([
            'name'=> 'Kayu Sans',
            'category'=> 'avatar',
            'image'=> 'avatar-animated3.gif',
            'points'=> 2053
        ]);
        DB::table('items')->insert([
            'name'=> 'Kethan',
            'category'=> 'avatar',
            'image'=> 'avatar-animated4.gif',
            'points'=> 534
        ]);
        DB::table('items')->insert([
            'name'=> 'Kherak Thelor',
            'category'=> 'avatar',
            'image'=> 'avatar-animated5.gif',
            'points'=> 1420
        ]);
        DB::table('items')->insert([
            'name'=> 'Salmon',
            'category'=> 'avatar',
            'image'=> 'avatar-animated6.gif',
            'points'=> 1420
        ]);
        DB::table('items')->insert([
            'name'=> 'Tamago',
            'category'=> 'avatar',
            'image'=> 'avatar-animated7.gif',
            'points'=> 2020
        ]);
        DB::table('items')->insert([
            'name'=> 'Bibimbap',
            'category'=> 'avatar',
            'image'=> 'avatar-animated8.gif',
            'points'=> 3010
        ]);
        DB::table('items')->insert([
            'name'=> 'Catfish',
            'category'=> 'avatar',
            'image'=> 'avatar-animated9.gif',
            'points'=> 1040
        ]);
        DB::table('items')->insert([
            'name'=> 'Sashimi',
            'category'=> 'avatar',
            'image'=> 'avatar-animated10.gif',
            'points'=> 1000
        ]);
        DB::table('items')->insert([
            'name'=> 'Carrots',
            'category'=> 'avatar',
            'image'=> 'avatar-animated11.gif',
            'points'=> 1330
        ]);
        DB::table('items')->insert([
            'name'=> 'Meatballs',
            'category'=> 'avatar',
            'image'=> 'avatar-animated12.gif',
            'points'=> 2220
        ]);

        // badge

        DB::table('items')->insert([
            'name'=> 'Bruno',
            'category'=> 'badge',
            'image'=> 'badge1.png',
            'points'=> 120
        ]);
        DB::table('items')->insert([
            'name'=> 'Sitzui',
            'category'=> 'badge',
            'image'=> 'badge2.png',
            'points'=> 950
        ]);
        DB::table('items')->insert([
            'name'=> 'Beautiful Night',
            'category'=> 'badge',
            'image'=> 'badge3.png',
            'points'=> 253
        ]);
        DB::table('items')->insert([
            'name'=> 'Baby',
            'category'=> 'badge',
            'image'=> 'badge4.png',
            'points'=> 534
        ]);
        DB::table('items')->insert([
            'name'=> 'Marry',
            'category'=> 'badge',
            'image'=> 'badge5.png',
            'points'=> 420
        ]);
        DB::table('items')->insert([
            'name'=> 'Juice',
            'category'=> 'badge',
            'image'=> 'badge6.png',
            'points'=> 420
        ]);
        DB::table('items')->insert([
            'name'=> 'Orange',
            'category'=> 'badge',
            'image'=> 'badge7.png',
            'points'=> 220
        ]);
        DB::table('items')->insert([
            'name'=> 'Tomatto',
            'category'=> 'badge',
            'image'=> 'badge8.png',
            'points'=> 310
        ]);
        DB::table('items')->insert([
            'name'=> 'SharkSkin',
            'category'=> 'badge',
            'image'=> 'badge9.png',
            'points'=> 340
        ]);
        DB::table('items')->insert([
            'name'=> 'Trasssh',
            'category'=> 'badge',
            'image'=> 'badge10.png',
            'points'=> 100
        ]);
        DB::table('items')->insert([
            'name'=> 'Shuts',
            'category'=> 'badge',
            'image'=> 'badge11.png',
            'points'=> 330
        ]);
        DB::table('items')->insert([
            'name'=> 'NoNoNom',
            'category'=> 'badge',
            'image'=> 'badge12.png',
            'points'=> 220
        ]);


        // frame

        DB::table('items')->insert([
            'name'=> 'Nighty Night',
            'category'=> 'frame',
            'image'=> 'frame1.png',
            'points'=> 2120
        ]);
        DB::table('items')->insert([
            'name'=> 'Doge',
            'category'=> 'frame',
            'image'=> 'frame2.png',
            'points'=> 2950
        ]);
        DB::table('items')->insert([
            'name'=> 'Awfull Night',
            'category'=> 'frame',
            'image'=> 'frame3.png',
            'points'=> 2253
        ]);
        DB::table('items')->insert([
            'name'=> 'Shooting Star',
            'category'=> 'frame',
            'image'=> 'frame4.png',
            'points'=> 2534
        ]);
        DB::table('items')->insert([
            'name'=> 'Hanging Man',
            'category'=> 'frame',
            'image'=> 'frame5.png',
            'points'=> 4220
        ]);
        DB::table('items')->insert([
            'name'=> 'Hammer',
            'category'=> 'frame',
            'image'=> 'frame6.png',
            'points'=> 4220
        ]);
        DB::table('items')->insert([
            'name'=> 'Inverted Hammer',
            'category'=> 'frame',
            'image'=> 'frame7.png',
            'points'=> 2220
        ]);
        DB::table('items')->insert([
            'name'=> 'Twezzer Top',
            'category'=> 'frame',
            'image'=> 'frame8.png',
            'points'=> 2310
        ]);
        DB::table('items')->insert([
            'name'=> 'Twezzer Bottom',
            'category'=> 'frame',
            'image'=> 'frame9.png',
            'points'=> 2340
        ]);
        DB::table('items')->insert([
            'name'=> 'Engulfing',
            'category'=> 'frame',
            'image'=> 'frame10.png',
            'points'=> 2100
        ]);
        DB::table('items')->insert([
            'name'=> 'Gravestone',
            'category'=> 'frame',
            'image'=> 'frame11.png',
            'points'=> 2330
        ]);
        DB::table('items')->insert([
            'name'=> 'Dragonfly',
            'category'=> 'frame',
            'image'=> 'frame12.png',
            'points'=> 3220
        ]);


        // mini profile

        DB::table('items')->insert([
            'name'=> 'Parrots',
            'category'=> 'profile',
            'image'=> 'mini-profile1.jpg',
            'points'=> 1120
        ]);
        DB::table('items')->insert([
            'name'=> 'Ginnee',
            'category'=> 'profile',
            'image'=> 'mini-profile2.jpg',
            'points'=> 1950
        ]);
        DB::table('items')->insert([
            'name'=> 'Octopus',
            'category'=> 'profile',
            'image'=> 'mini-profile3.jpg',
            'points'=> 1253
        ]);
        DB::table('items')->insert([
            'name'=> 'Central',
            'category'=> 'profile',
            'image'=> 'mini-profile4.jpg',
            'points'=> 1534
        ]);
        DB::table('items')->insert([
            'name'=> '007',
            'category'=> 'profile',
            'image'=> 'mini-profile5.jpg',
            'points'=> 1220
        ]);
        DB::table('items')->insert([
            'name'=> 'Double Cheese',
            'category'=> 'profile',
            'image'=> 'mini-profile6.jpg',
            'points'=> 4120
        ]);
        DB::table('items')->insert([
            'name'=> 'Extra Hot',
            'category'=> 'profile',
            'image'=> 'mini-profile7.jpg',
            'points'=> 1220
        ]);
        DB::table('items')->insert([
            'name'=> 'Spinning Tree',
            'category'=> 'profile',
            'image'=> 'mini-profile8.jpg',
            'points'=> 2110
        ]);
        DB::table('items')->insert([
            'name'=> 'Marubozu',
            'category'=> 'profile',
            'image'=> 'mini-profile9.jpg',
            'points'=> 2140
        ]);
        DB::table('items')->insert([
            'name'=> 'Psikologist',
            'category'=> 'profile',
            'image'=> 'mini-profile10.jpg',
            'points'=> 1100
        ]);
        DB::table('items')->insert([
            'name'=> 'Psikist',
            'category'=> 'profile',
            'image'=> 'mini-profile11.jpg',
            'points'=> 1330
        ]);
        DB::table('items')->insert([
            'name'=> 'Compensation',
            'category'=> 'profile',
            'image'=> 'mini-profile12.jpg',
            'points'=> 1220
        ]);

        // sticker

        DB::table('items')->insert([
            'name'=> 'Teng Tong',
            'category'=> 'sticker',
            'image'=> 'sticker1.png',
            'points'=> 5120
        ]);
        DB::table('items')->insert([
            'name'=> 'Gong Gong',
            'category'=> 'sticker',
            'image'=> 'sticker2.png',
            'points'=> 5950
        ]);
        DB::table('items')->insert([
            'name'=> 'Hai di Lao',
            'category'=> 'sticker',
            'image'=> 'sticker3.png',
            'points'=> 5253
        ]);
        DB::table('items')->insert([
            'name'=> 'Quali',
            'category'=> 'sticker',
            'image'=> 'sticker4.png',
            'points'=> 5534
        ]);
        DB::table('items')->insert([
            'name'=> 'King Pansit',
            'category'=> 'sticker',
            'image'=> 'sticker5.png',
            'points'=> 5220
        ]);
        DB::table('items')->insert([
            'name'=> 'Hakuya',
            'category'=> 'sticker',
            'image'=> 'sticker6.png',
            'points'=> 5220
        ]);
        DB::table('items')->insert([
            'name'=> 'Budhe',
            'category'=> 'sticker',
            'image'=> 'sticker7.png',
            'points'=> 5220
        ]);
        DB::table('items')->insert([
            'name'=> 'BuKris',
            'category'=> 'sticker',
            'image'=> 'sticker8.png',
            'points'=> 5310
        ]);
        DB::table('items')->insert([
            'name'=> 'Gyuk Guk',
            'category'=> 'sticker',
            'image'=> 'sticker9.png',
            'points'=> 5340
        ]);
        DB::table('items')->insert([
            'name'=> 'Kint kint',
            'category'=> 'sticker',
            'image'=> 'sticker10.png',
            'points'=> 5100
        ]);
        DB::table('items')->insert([
            'name'=> 'Zuppa zuppa',
            'category'=> 'sticker',
            'image'=> 'sticker11.png',
            'points'=> 5330
        ]);
        DB::table('items')->insert([
            'name'=> 'Cone IceCream',
            'category'=> 'sticker',
            'image'=> 'sticker12.png',
            'points'=> 5220
        ]);



    }
}
