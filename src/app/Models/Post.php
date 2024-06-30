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
        $this->belongsTo(Profile::class, 'profile_id');
    }

    // Food_Scenery_Postリレーション
    public function food_scenery_posts()
    {
        $this->belongsTo(Food_Scenery_Post::class, 'food_scenery_post_id');
    }

    // Food_Genreリレーション
    public function food_genre()
    {
        $this->belongsTo(Food_Genre::class);
    }

    // Scenery_Genreリレーション
    public function scenery_genre()
    {
        $this->belongsTo(Scenery_Genre::class);
    }

    // Another_Imageリレーション
    public function another_images()
    {
        $this->hasMany(Another_Image::class, 'post_id');
    }
}
