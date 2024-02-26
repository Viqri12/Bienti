<?php

namespace Database\Seeders;
use App\Models\TierSosmed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TierSosmedSeeder extends Seeder
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
            TierSosmed::create([
                'name' => $item
            ]);
        }
    }
}
