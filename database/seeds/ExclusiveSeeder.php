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
        for ($num = 15; $num <= 50; $num++) {
            $url = 'https://api.opencritic.com/api/game/' . $num;
            $eloquents = [json_decode(collect(Http::get($url)->json()))];
            foreach ($eloquents as $eloquent) {
                if (isset($eloquent->id) &&
                    in_array(7, array_column($eloquent->Platforms, 'id')))
                {
                    DB::table('games')->update([
                        'Microsoft' => 1,
                        'id' => $eloquent->id
                    ]);}
                }
            }
        }
}
