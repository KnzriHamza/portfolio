<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('socials')->insert([
            'socialName' => "Discord",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-discord-new-96.png",
        ]);

        DB::table('socials')->insert([
            'socialName' => "Messenger",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-facebook-messenger-96.png",
        ]);

        DB::table('socials')->insert([
            'socialName' => "instagram",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-instagram-96.png",
        ]);

        DB::table('socials')->insert([
            'socialName' => "Linkedin",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-linkedin-96.png",
        ]);

        DB::table('socials')->insert([
            'socialName' => "Slack",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-slack-96.png",
        ]);

        DB::table('socials')->insert([
            'socialName' => "Youtube",
            'socialStatus' => 0,
            'socialUrl' => "social",
            'socialimageUrl' => "frontend/public/icons8-youtube-96.png",
        ]);
    }
}
