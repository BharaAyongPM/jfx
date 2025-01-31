<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravolt\Indonesia\Indonesia;
use Laravolt\Indonesia\IndonesiaService;

class DistrictsSeeder extends Seeder
{
    public function run()
    {
        $indonesia = new IndonesiaService();
        $districts = $indonesia->allDistricts();

        foreach ($districts as $district) {
            \DB::table('indonesia_districts')->insert([
                'id' => $district['id'],
                'city_id' => $district['city_id'],
                'name' => $district['name'],
            ]);
        }
    }
}
