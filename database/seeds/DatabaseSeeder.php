<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Album;
use App\Song;
use App\Playlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('users')->delete();
        DB::table('albums')->delete();
        DB::table('songs')->delete();
        DB::table('playlists')->delete();

        // =========================== CREATE USERS ============================
        $users= [
            ['name' => 'Bert',   'email' => 'bert@user.com',   'password' => Hash::make('secret') ],
            ['name' => 'Ernie',  'email' => 'ernie@user.com',  'password' => Hash::make('secret') ],
            ['name' => 'Calvin', 'email' => 'calvin@user.com', 'password' => Hash::make('secret') ],
            ['name' => 'Hobbes', 'email' => 'hobbes@user.com', 'password' => Hash::make('secret') ],
            ['name' => 'admin',  'email' => 'admin@user.com',  'password' => Hash::make('secret') ],
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }

        // ========================== CREATE ALBUMS ============================


        $collection = [];

        for ($i = 0; $i < 20; $i++) {
            $album = new Album([
                'title'  => "The Fake Album",
                'artist' => "Faker McFake",
                'label'  => "EMI",
                'year'   => "2020",
                'artURL' => "/images/album_covers/{$i}.png"
            ]);

            $album->save();

            array_push($collection, $album);
        }


        // ========================== CREATE SONGS =============================

        $songs = [
            [ 'title' => "Blue",                 'duration' => 161710, 'audioUrl' => "/music/blue"    ],
            [ 'title' => "Green",                'duration' => 103960, 'audioUrl' => "/music/green"   ],
            [ 'title' => "Red",                  'duration' => 268450, 'audioUrl' => "/music/red"     ],
            [ 'title' => "Pink",                 'duration' => 153140, 'audioUrl' => "/music/pink"    ],
            [ 'title' => "Magenta",              'duration' => 374220, 'audioUrl' => "/music/magenta" ],
            [ 'title' => "Hello, Operator?",     'duration' => 161710, 'audioUrl' => "/music/blue"    ],
            [ 'title' => "Ring, ring, ring",     'duration' => 103960, 'audioUrl' => "/music/green"   ],
            [ 'title' => "Fits in your pocket",  'duration' => 268450, 'audioUrl' => "/music/red"     ],
            [ 'title' => "Can you hear me now?", 'duration' => 153140, 'audioUrl' => "/music/pink"    ],
            [ 'title' => "Wrong phone number",   'duration' => 374220, 'audioUrl' => "/music/magenta" ],
            [ 'title' => "Fake song",            'duration' => 161710, 'audioUrl' => "/music/blue"    ],
            [ 'title' => "Fake, fake, fake",     'duration' => 103960, 'audioUrl' => "/music/green"   ],
            [ 'title' => "Fake in your pocket",  'duration' => 268450, 'audioUrl' => "/music/red"     ],
            [ 'title' => "Another fake song",    'duration' => 153140, 'audioUrl' => "/music/pink"    ],
            [ 'title' => "Fake phone number",    'duration' => 374220, 'audioUrl' => "/music/magenta" ],
        ];


        // ====================== ADD SONGS TO ALBUMS ==========================

        foreach ($collection as $album) {
            for ($i = 0; $i < 5; $i++) {
                $song = $songs[rand(0, count($songs) - 1)];
                $song['album_id'] = $album->id;
                $album->songs()->create($song);
            }
        }


        Model::reguard();
    }
}
