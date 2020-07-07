<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class GameSeeder extends Seeder
{
    public function run()
    {
        for ($num = 15; $num <= 50; $num++) {
            $url = 'https://api.opencritic.com/api/game/' . $num;
            $games = [json_decode(collect(Http::get($url)->json()))];
            foreach ($games as $game) {
                if (isset($game->id)) {
                        DB::table('games')->insert([
                            'id' => $game->id,
                            'bannerScreenshot' => $game->bannerScreenshot->fullRes,
                            'type' => $game->type,
                            'percentRecommended' => substr($game->percentRecommended, 0, 2),
                            'numReviews' => $game->numReviews,
                            'numTopCriticReviews' => $game->numTopCriticReviews,
                            'medianScore' => $game->medianScore,
                            'averageScore' => substr($game->averageScore, 0, 2),
                            'topCriticScore' => substr($game->topCriticScore, 0, 2),
                            'percentile' => $game->percentile,
                            'tier' => $game->tier,
                            'hasLootBoxes' => $game->hasLootBoxes,
                            'isMajorTitle' => $game->isMajorTitle,
                            'name' => $game->name,
                            'description' => $game->description,
                            'firstReleaseDate' => substr($game->firstReleaseDate, 0, 10),
                            'Rating' => $game->Rating->value ?? 'unknown',
                            'reviewSummary' => $game->reviewSummary->summary ?? 'none',
                            'Sony' => in_array(6, array_column($game->Platforms, 'id'))|| in_array(31, array_column($game->Platforms, 'id')) || in_array(33, array_column($game->Platforms, 'id')),
                            'Microsoft' => in_array(7, array_column($game->Platforms, 'id'))|| in_array(27, array_column($game->Platforms, 'id')),
                            'Nintendo' => in_array(26, array_column($game->Platforms, 'id')) || in_array(32, array_column($game->Platforms, 'id')) || in_array(36, array_column($game->Platforms, 'id')),
                        ]);
                    }
                }
                    }
                }
}
