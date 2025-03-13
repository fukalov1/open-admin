<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Instagram'],
            ['name' => 'TikTok'],
            ['name' => 'Telegram'],
            ['name' => 'YouTube'],
            ['name' => 'VK'],
            ['name' => 'Twitch'],
            ['name' => 'Дзен'],
            ['name' => 'ОК'],
        ];
        Social::insert($data);
    }
}
