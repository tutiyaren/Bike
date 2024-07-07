<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Scenery_Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'area_id',
        'title',
        'content',
        'image'
    ];

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

    // Postリレーション
    public function post()
    {
        return $this->hasOne(Post::class, 'post_id');
    }
}
