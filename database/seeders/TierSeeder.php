<?php

namespace Database\Seeders;
use App\Models\Tier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nano',
            'makro',
            'mikro',
            'mega'
        ];

        foreach ($data as $item) {
            Tier::create([
                'name' => $item
            ]);
        }
    }
}
