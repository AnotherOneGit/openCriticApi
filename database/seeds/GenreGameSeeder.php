<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class GenreGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($num = 31; $num <= 1000; $num++) {
            $url = 'https://api.opencritic.com/api/game/' . $num;
            $eloquents = [json_decode(collect(Http::get($url)->json()))];
            foreach ($eloquents as $eloquent) {
                if (isset($eloquent->id)) {
                    for ($number = 0; $number <= count($eloquent->Genres)-1; $number++) {
                        DB::table('game_genre')->insert([
                            'genre_id' => $eloquent->Genres[$number]->id,
                            'game_id' => $eloquent->id,
                        ]);
                    }
                }
            }
        }
    }
}
