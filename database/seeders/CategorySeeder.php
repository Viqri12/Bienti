<?php

namespace Database\Seeders;

use App\Models\CategoryInfluencer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table = [
            'comedian',
            'vapers',
            'technology/gadget',
            'beuty',
            'travellers',
            'musician',
            'fashion',
            'lifestyle',
            'automotive',
            'education',
            'foodies',
            'dancer',
            'sport',
            'gamers',
            'gadget',
            'entertaiment',
            'actor',
            'chef/cooker',
            'singer'
        ];

        foreach ($table as $item) {
            CategoryInfluencer::create([
                'name' => $item
            ]);
        }
    }
}
