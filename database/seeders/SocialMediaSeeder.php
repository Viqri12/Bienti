<?php

namespace Database\Seeders;

use App\Models\Rate_card;
use App\Models\SosialMedia;
use App\Models\Tier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           [
            'name' =>  'youtube',
            'rate_card' => [
                'Youtube'
            ]
           ],

           [
            'name' =>  'instagram',
            'rate_card' => [
                'Ig photo feed',
                'Ig Photo feed carousel',
                'Ig Story',
                'Ig Story with link',
                'Ig Reels',
                'Ig Live',
                'Attending Event',
            ]
           ],

           [
            'name' =>  'tiktok',
            'rate_card' => [
                'Tiktok Video',
                'Attending Event'
            ]
           ],
           
           [
            'name' =>  'twitter',
            'rate_card' => [
                '1x Tweet',
                '1x Tweet with image',
                '1x Treads Tweet',
                '1x Treads Tweet with Image',
                '1x Video Tweet',   
            ]
           ],
            
        ];

        foreach ($data as $item) {
          $create = SosialMedia::create([
                'name' => $item['name']
            ]);
            foreach ($item['rate_card'] as $rate)
            $media = Rate_card::create([
                'name' => $rate,
                'sosial_media_id' => $create->id
            ]);
        }
    }
}
