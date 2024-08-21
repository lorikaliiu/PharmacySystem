<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citys = [
            1 => ['name' => 'Ferizaj'],
            2 => ['name' => 'Prishtin'],
            3 => ['name' => 'Shtime'],
        ];

        foreach($citys as $item){
            City::create([
                'name' => $item["name"]
            ]);
        }
    }
}
