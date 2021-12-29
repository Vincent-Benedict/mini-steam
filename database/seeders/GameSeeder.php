<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'title' => 'Cyberpunk 2077',
            'cover' => 'game1.jpg',
            'description' => 'Cyberpunk 2077 is an open-world, action-adventure 
            story set in Night City, a megalopolis obsessed with power, glamour 
            and body modification. You play as V, a mercenary outlaw going after 
            a one-of-a-kind implant that is the key to immortality.',
            'review' => 'Overwhelmingly Possitive',
            'release' => '2020-12-10',
            'developer' => 'Ubisoft',
            'publisher' => 'Valve',
            'price' => 300000,
            'discount' => 10,
            'seller' => 200,
            'os' => 'Windows 10',
            'processor' => 'Ryzen 3 1300X or Equivalent; Core i7-4790 or Equivalent',
            'memory' => '16 GB RAM',
            'graphics' => 'AMD: Radeon RX 480 or Equivalent; NVIDIA: GeForce GTX 1060 or Equivalent',
            'directx' => 'Version 11',
            'storage' => '50 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'Hell Let Loose',
            'cover' => 'game2.jpg',
            'description' => 'Join the ever expanding experience of Hell Let Loose 
            - a hardcore World War Two first person shooter with epic battles of 
            100 players with infantry, tanks, artillery, a dynamically shifting front 
            line and a unique resource based RTS-inspired meta-game.',
            'review' => 'Negative',
            'release' => '2019-11-10',
            'developer' => 'Black Matter Pty Ltd',
            'publisher' => 'Team17',
            'price' => 400000,
            'discount' => 20,
            'seller' => 123,
            'os' => 'Windows10 64bit',
            'processor' => 'Intel Core i5-6600/AMD Ryzen 3 1300X',
            'memory' => '12 GB RAM',
            'graphics' => 'NVIDIA GeForce GTX 960 4GB/AMD Radeon R9 380 4GB',
            'directx' => 'Version 11',
            'storage' => '30 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'PUBG: Battlegrounds',
            'cover' => 'game3.jpg',
            'description' => 'DISCLAIMER: The game will be free to play from January 12th, 
            2022. PUBG: BATTLEGROUNDS is a battle royale shooter that pits 100 players 
            against each other in a struggle for survival. Gather supplies and outwit your 
            opponents to become the last person standing.',
            'review' => 'Mixed',
            'release' => '2018-12-5',
            'developer' => 'KRAFTON, Inc.',
            'publisher' => 'KRAFTON, Inc.',
            'price' => 0,
            'discount' => 0,
            'seller' => 350,
            'os' => '64-bit Windows 7, Windows 8.1, Windows 10',
            'processor' => 'Intel Core i5-4430 / AMD FX-6300',
            'memory' => '8 GB RAM',
            'graphics' => 'NVIDIA GeForce GTX 960 2GB / AMD Radeon R7 370 2GB',
            'directx' => 'Version 11',
            'storage' => '40 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'Red Dead Redemption 2',
            'cover' => 'game4.jpg',
            'description' => 'Winner of over 175 Game of the Year Awards and recipient 
            of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan 
            and the infamous Van der Linde gang, on the run across America at the dawn 
            of the modern age. Also includes access to the shared living world of Red 
            Dead Online.',
            'review' => 'Very Positive',
            'release' => '2019-12-6',
            'developer' => 'Rockstar Games',
            'publisher' => 'Rockstar Games',
            'price' => 320000,
            'discount' => 50,
            'seller' => 221,
            'os' => 'Windows 7 - Service Pack 1 (6.1.7601)',
            'processor' => 'Intel® Core™ i5-2500K / AMD FX-6300',
            'memory' => '8 GB RAM',
            'graphics' => 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB',
            'directx' => 'Direct X Compatible',
            'storage' => '150 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'Resident Evil 7 Biohazard',
            'cover' => 'game5.jpg',
            'description' => 'Fear and isolation seep through the walls of an 
            abandoned southern farmhouse. "7" marks a new beginning for survival 
            horror with the “Isolated View” of the visceral new first-person 
            perspective.',
            'review' => 'Overwhelming Positive',
            'release' => '2019-12-6',
            'developer' => 'Hangar 13',
            'publisher' => 'Rockstar Games',
            'price' => 420000,
            'discount' => 30,
            'seller' => 531,
            'os' => 'Windows 7 - Service Pack 1 (6.1.7601)',
            'processor' => 'Intel® Core™ i5-2500K / AMD FX-6300',
            'memory' => '8 GB RAM',
            'graphics' => 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB',
            'directx' => 'Direct X Compatible',
            'storage' => '150 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'World Rally Championship',
            'cover' => 'game6.jpg',
            'description' => 'The most complete and authentic official WRC 
            simulation yet. New physics for all surfaces, a completely redesigned 
            career mode, dynamic weather conditions, 50 teams, 14 countries, 
            100 tracks, weekly challenges and an eSports...',
            'review' => 'Overwhelming Positive',
            'release' => '2019-11-5',
            'developer' => 'CD Projekt Red',
            'publisher' => 'Foulball Hangover',
            'price' => 330000,
            'discount' => 65,
            'seller' => 448,
            'os' => 'Windows 7 - Service Pack 1 (6.1.7601)',
            'processor' => 'Intel® Core™ i5-2500K / AMD FX-6300',
            'memory' => '8 GB RAM',
            'graphics' => 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB',
            'directx' => 'Direct X Compatible',
            'storage' => '150 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'title' => 'Kerbal Space Program',
            'cover' => 'game7.jpg',
            'description' => 'In Kerbal Space Program, take charge of the 
            space program for the alien race known as the Kerbals. You have 
            access to an array of parts to assemble fully-functional spacecraft 
            that flies (or doesn’t) based on realistic aerodynamic and orbital 
            physics.',
            'review' => 'Overwhelming Positive',
            'release' => '2016-11-5',
            'developer' => 'Ubisoft',
            'publisher' => 'Valve',
            'price' => 2000000,
            'discount' => 85,
            'seller' => 204,
            'os' => 'Windows 7 - Service Pack 1 (6.1.7601)',
            'processor' => 'Intel® Core™ i5-2500K / AMD FX-6300',
            'memory' => '8 GB RAM',
            'graphics' => 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB',
            'directx' => 'Direct X Compatible',
            'storage' => '150 GB available space',
            'network' => 'Broadband Internet connection',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
