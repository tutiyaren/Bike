<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenery_Another_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'scenery_post_id',
        'image'
    ];

    // Scenery_Postリレーション
    public function scenery_posts()
    {
        return $this->belongsTo(Scenery_Post::class, 'scenery_post_id');
    }

    protected $table = 'scenery_another_images';
}
