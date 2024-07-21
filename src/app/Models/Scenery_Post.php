<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Scenery_Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'area_id',
        'scenery_genre_id',
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

    public function scopeSceneryGenreSearch($query, $sceneryGenre)
    {
        if (!empty($sceneryGenre)) {
            $query->where('scenery_genre_id', $sceneryGenre);
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

    // Scenery_Genreリレーション
    public function scenery_genre()
    {
        return $this->belongsTo(Scenery_Genre::class, 'scenery_genre_id');
    }

    // Scenery_Another_Imageリレーション
    public function scenery_another_images()
    {
        return $this->hasMany(Scenery_Another_Image::class, 'scenery_post_id');
    }

    protected $table = 'scenery_posts';
}
