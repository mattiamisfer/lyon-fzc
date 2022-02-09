<?php

namespace Database\Seeders;

use App\Models\Plans;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
   $plans = [
            [
            'name' => 'SILVER',
            'amount' => 100.25,
            'description' => 'Window Tinting Side & Back
            Wash VIP
            Full Body Ceramic Protectio 2 Layers
            Polish & Detailing
            Leather & Fabric Ceramic Protection
            Free Service & Checkup 2 Times',
            'duration' => '1 year'
        ],
        [
            'name' => 'GOLD',
            'amount' => 500.25,
            'description' => 'Window Tinting Side & Back
            Wash VIP
            Full Body Ceramic Protectio 2 Layers
            Polish & Detailing
            Leather & Fabric Ceramic Protection
            Free Service & Checkup 2 Times',
            'duration' => '6 month'
        ]
        ];

        Plans::insert($plans);
    }
}
