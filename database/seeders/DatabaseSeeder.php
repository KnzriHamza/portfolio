<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ToolSeeder::class);
        $this->call(SocialSeeder::class);
        // \App\Models\User::factory(10)->create();



        DB::table('freelancers')->insert([
            'name' => "Hamza Kanzari",
            'postStatus' => "Full Stack Web Dev",
            'country' => "Gemany",
            'birthdate' => "1993.08.18",

            'city' => "Halle",
            'email' => "Kanzari.Hamza@gmail.com",
            'mobile' => "21417443",
            'language' => "English",
            'experience' => "Http/// fsdfsdgs",
            'status' => 0,

        ]);        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
