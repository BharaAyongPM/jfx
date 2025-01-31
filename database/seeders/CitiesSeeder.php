<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravolt\Indonesia\Indonesia;
use Laravolt\Indonesia\IndonesiaService;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        $indonesia = new IndonesiaService();
        $cities = $indonesia->allCities();

        foreach ($cities as $city) {
            \DB::table('indonesia_cities')->insert([
                'id' => $city['id'],
                'province_id' => $city['province_id'],
                'name' => $city['name'],
            ]);
        }
    }
}
