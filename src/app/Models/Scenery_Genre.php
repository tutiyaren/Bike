<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenery_Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    // Postリレーション
    public function Post()
    {
        return $this->hasOne(Post::class);
    }
}
