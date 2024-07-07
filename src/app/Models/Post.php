<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'food_scenery_post_id',
        'genre',
    ];

    // Profileリレーション
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    // Food_Scenery_Postリレーション
    public function food_scenery_posts()
    {
        return $this->belongsTo(Food_Scenery_Post::class, 'food_scenery_post_id');
    }

    // Food_Genreリレーション
    public function food_genre()
    {
        return $this->belongsTo(Food_Genre::class);
    }

    // Scenery_Genreリレーション
    public function scenery_genre()
    {
        return $this->belongsTo(Scenery_Genre::class);
    }

    // Another_Imageリレーション
    public function another_images()
    {
        return $this->hasMany(Another_Image::class, 'post_id');
    }
}
