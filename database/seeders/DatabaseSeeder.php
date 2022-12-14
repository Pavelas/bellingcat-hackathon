<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Team;
use App\Models\Tool;
use App\Models\Topic;
use App\Models\Favorite;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->withPersonalTeam()->create([
            'name' => 'Bellingcat',
            'email' => 'bellingcat@bellingcat.com',
            'password' => Hash::make('bellingcat'),
            'current_team_id' => 1,
        ]);

        User::factory(9)->create();

        Topic::factory()->create(['name' => 'Reverse image search', 'icon' => 'ðļ']);
        Topic::factory()->create(['name' => 'Metadata', 'icon' => 'ðŋ']);
        Topic::factory()->create(['name' => 'Facial recognition', 'icon' => 'ð§âðĶē']);
        Topic::factory()->create(['name' => 'Social media', 'icon' => 'ðĪģ']);
        Topic::factory()->create(['name' => 'People', 'icon' => 'ð§âðĪâð§']);
        Topic::factory()->create(['name' => 'Maps', 'icon' => 'ðš']);
        Topic::factory()->create(['name' => 'Transport trackers', 'icon' => 'âïļ']);
        Topic::factory()->create(['name' => 'Websites', 'icon' => 'ð']);
        Topic::factory()->create(['name' => 'Companies & Finance', 'icon' => 'ðĩ']);
        Topic::factory()->create(['name' => 'Environment & Wildlife', 'icon' => 'ðģ']);
        Topic::factory()->create(['name' => 'Archiving', 'icon' => 'ðïļ']);
        Topic::factory()->create(['name' => 'Data visualization', 'icon' => 'ð']);
        Topic::factory()->create(['name' => 'Guides', 'icon' => 'ð']);
        Topic::factory()->create(['name' => 'Education', 'icon' => 'ð']);

        Tool::factory(50)->create();

        $toolIds = collect(range(1, 50));
        $userIds = collect(range(1, 10));

        $possibleFavorites = $userIds->crossJoin($toolIds);

        $favorites = $possibleFavorites
            ->random(300)
            ->map(fn($item) => [
                    'user_id' => $item[0],
                    'tool_id' => $item[1],
                ])
            ->all();

        Favorite::factory()->createMany($favorites);

        foreach (Tool::all() as $tool) {
            Comment::factory(rand(0, 7))->existing()->create(['tool_id' => $tool->id]);
        }
    }
}
