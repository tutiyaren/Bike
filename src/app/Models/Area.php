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

    // Food_Scenery_Postリレーション
    public function food_scenery_posts()
    {
        $this->hasMany(Food_Scenery_Post::class, 'area_id');
    }
}
