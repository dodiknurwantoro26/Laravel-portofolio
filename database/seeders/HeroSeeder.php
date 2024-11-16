<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'key' => 'name',
                'value' => 'Dodik Nurwantoro',
                'type' => 'text',
            ],
            [
                'key' => 'profesion',
                'value' => 'Full Stack Developer',
                'type' => 'text',
            ],
            [
                'key' => 'hero_text',
                'value' => 'Hallo, saya {name}, saya seorang {profesion}',
                'type' => 'text',
            ],
            [
                'key' => 'hero_image',
                'value' => null,
                'type' => 'file',
            ],
            [
                'key' => 'wa_link',
                'value' => 'https://wa.me/6287728814896',
                'type' => 'text',
            ],

        ];

        Content::insert($contents);

        //terminal menjalankan insert ke database: php artisan db:seed --class=HeroSeeder
    }
}
