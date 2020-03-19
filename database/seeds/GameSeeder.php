<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($num=0; $num<=100; $num++){
        $url = 'https://api.opencritic.com/api/game/'. $num;
        $games = [json_decode(collect(Http::get($url)->json()))];
        foreach ($games as $game)
        {
            if (isset($game->id)){
            DB::table('games')->insert([
                'id'=>$game->id,
                'bannerScreenshot'=>$game->bannerScreenshot->fullRes,
                'type'=>$game->type,
                'percentRecommended'=>$game->percentRecommended,
                'numReviews'=>$game->numReviews,
                'numTopCriticReviews'=>$game->numTopCriticReviews,
                'medianScore'=>$game->medianScore,
                'averageScore'=>$game->averageScore,
                'topCriticScore'=>$game->topCriticScore,
                'percentile'=>$game->percentile,
                'tier'=>$game->tier,
                'hasLootBoxes'=>$game->hasLootBoxes,
                'isMajorTitle'=>$game->isMajorTitle,
                'name'=>$game->name,
                'description'=>$game->description,
            ]);}

//        if (isset($game->Rating->value))
//        {
//            DB::table('games')->insert([
//                'Rating'=>$game->Rating->value,
//                ]);
//        }
//
//            if (isset($game->reviewSummary->summary))
//            {
//                DB::table('games')->insert([
//                    'reviewSummary'=>$game->reviewSummary->summary,
//                ]);
//            }

        }
        }

    }
}
