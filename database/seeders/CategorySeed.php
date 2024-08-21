<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catogories = [
            1 => [
                'name' => 'Kancerogjene',
            ],
            2 => [
                'name' => 'Imunosystem'
            ]
            ];

            foreach($catogories as $item){
                Category::create([
                    'name' => $item['name']
                ]);
            }
    }
}
