<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'area'
    ];

    // Food_Postリレーション
    public function food_posts()
    {
        return $this->hasMany(Food_Post::class, 'area_id');
    }

    // Scenery_Postリレーション
    public function scenery_posts()
    {
        return $this->hasMany(Scenery_Post::class, 'area_id');
    }

    protected $table = 'areas';
}
