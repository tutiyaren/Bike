<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Another_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'image'
    ];

    // Postリレーション
    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
