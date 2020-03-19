<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://api.opencritic.com/api/platform';
        $platforms = json_decode(collect(Http::get($url)->json()));
        foreach ($platforms as $platform) {
            DB::table('platforms')->insert([
                'id' => $platform->id,
                'name' => $platform->name,
                'shortName' => $platform->shortName,
                'imageSrc' => $platform->imageSrc,
            ]);
        }
    }
}
