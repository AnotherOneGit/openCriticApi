<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PlatformGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($num = 0; $num <= 100; $num++) {
            $url = 'https://api.opencritic.com/api/game/' . $num;
            $eloquents = [json_decode(collect(Http::get($url)->json()))];
            foreach ($eloquents as $eloquent) {
                if (isset($eloquent->id)) {
                    for ($number = 0; $number <= count($eloquent->Platforms)-1; $number++) {
                        DB::table('platform__games')->insert([
                            'platform_id' => $eloquent->Platforms[$number]->id,
                            'game_id' => $eloquent->id,
                        ]);
                    }
                }
            }
        }
    }
}
