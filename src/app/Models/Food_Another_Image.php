<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Another_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_post_id',
        'image'
    ];

    // Food_Postリレーション
    public function food_posts()
    {
        return $this->belongsTo(Food_Post::class, 'food_post_id');
    }

    protected $table = 'food_another_images';
}
