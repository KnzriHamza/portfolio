<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tools')->insert([
            'toolName' => "AWS",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-amazon-web-96.png",
        ]);

        DB::table('tools')->insert([
            'toolName' => "Angular",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-angularjs-96.png",
        ]);

        DB::table('tools')->insert([
            'toolName' => "Bash",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-bash-96.png",
        ]);

        DB::table('tools')->insert([
            'toolName' => "Bitbucket",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-bitbucket-96.png",
        ]);

        DB::table('tools')->insert([
            'toolName' => "Css",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-css3-96.png",
        ]);

        DB::table('tools')->insert([
            'toolName' => "Docker",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-docker-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Flutter",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-flutter-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Github",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-github-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Html",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-html-5-96-2.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Javascript",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-javascript-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Nuxt",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-nuxt-jc-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Python",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-python-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "React",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-react-native-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Tailwind",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-tailwindcss-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Typescript",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-typescript-96.png",
        ]);
        DB::table('tools')->insert([
            'toolName' => "Vue",
            'toolStatus' => 0,
            'toolImageUrl' => "frontend/public/icons8-vue-js-96.png",
        ]);

    }
}
