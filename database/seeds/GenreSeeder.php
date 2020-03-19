<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://api.opencritic.com/api/genre';
        $genres = json_decode(collect(Http::get($url)->json()));
        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'id' => $genre->id,
                'name' => $genre->name,
            ]);
        }
    }
}
