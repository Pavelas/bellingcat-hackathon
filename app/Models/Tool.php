<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Tool extends Model
{
    use HasFactory, HasSlug;

    const TOOLS_PER_PAGE = 10;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function isFavoritedByUser(User $user)
    {
        return Favorite::where('user_id', $user->id)
            ->where('tool_id', $this->id)
            ->exists();
    }

    public function addToFavorites(User $user)
    {
        Favorite::create([
            'tool_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

    public function removeFromFavorites(User $user)
    {
        Favorite::where('tool_id', $this->id)
            ->where('user_id', $user->id)
            ->first()
            ->delete();
    }
}
