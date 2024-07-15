<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food_Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'area_id',
        'food_genre_id',
        'title',
        'content',
        'image'
    ];

    public function scopeAreaSearch($query, $area)
    {
        if (!empty($area)) {
            $query->where('area_id', $area);
        }
    }

    public function scopeFoodGenreSearch($query, $foodGenre)
    {
        if (!empty($foodGenre)) {
            $query->where('food_genre_id', $foodGenre);
        }
    }

    public function scopeTitleSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }
    }

    public function getShortTitleAttribute()
    {
        return Str::limit($this->title, 28, '...');
    }

    // Profileリレーション
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    // Areaリレーション
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    // Food_Genreリレーション
    public function food_genre()
    {
        return $this->belongsTo(Food_Genre::class, 'food_genre_id');
    }

    // Food_Another_Imageリレーション
    public function food_another_images()
    {
        return $this->hasMany(Food_Another_Image::class, 'food_post_id');
    }

    protected $table = 'food_posts';
}
