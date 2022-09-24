<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Team;
use App\Models\Tool;
use App\Models\Topic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Bellingcat',
            'email' => 'bellingcat@bellingcat.com',
            'password' => Hash::make('bellingcat'),
            'current_team_id' => 1,
        ]);

        Topic::factory()->create(['name' => 'Social media']);
        Topic::factory()->create(['name' => 'Scrappers']);
        Topic::factory()->create(['name' => 'Geolocation']);

        Tool::factory(20)->create();
    }
}
