<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ExclusiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($num = 105; $num <= 111; $num++) {
            $url = 'https://api.opencritic.com/api/game/' . $num;
            $eloquents = [json_decode(collect(Http::get($url)->json()))];
            foreach ($eloquents as $eloquent) {
                if (isset($eloquent->id) & count($eloquent->Platforms)==1) {
                        DB::table('exclusives')->insert([
                            'exclusive' => 1,
                            'game_id' => $eloquent->id,
                        ]);
                    }
                }
            }
        }
}
