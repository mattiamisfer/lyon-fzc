<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $category  = [
            [
                'name' => 'WASH CLEAN & DRY'
            ],
            [
                'name' => 'OUR DETAILING CENTERS SERVICES'
            ],
        [
            'name' => 'PROTECTION
            '
        ]

        ];

        Category::insert($category);
    }
}
