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

        Topic::factory()->create(['name' => 'Reverse image search', 'icon' => '📸']);
        Topic::factory()->create(['name' => 'Metadata', 'icon' => '💿']);
        Topic::factory()->create(['name' => 'Facial recognition', 'icon' => '🧑‍🦲']);
        Topic::factory()->create(['name' => 'Social media', 'icon' => '🤳']);
        Topic::factory()->create(['name' => 'People', 'icon' => '🧑‍🤝‍🧑']);
        Topic::factory()->create(['name' => 'Maps', 'icon' => '🗺']);
        Topic::factory()->create(['name' => 'Transport trackers', 'icon' => '✈️']);
        Topic::factory()->create(['name' => 'Websites', 'icon' => '🌐']);
        Topic::factory()->create(['name' => 'Companies & Finance', 'icon' => '💵']);
        Topic::factory()->create(['name' => 'Environment & Wildlife', 'icon' => '🌳']);
        Topic::factory()->create(['name' => 'Archiving', 'icon' => '🗃️']);
        Topic::factory()->create(['name' => 'Data visualization', 'icon' => '📊']);
        Topic::factory()->create(['name' => 'Guides', 'icon' => '📚']);
        Topic::factory()->create(['name' => 'Education', 'icon' => '🎓']);

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
