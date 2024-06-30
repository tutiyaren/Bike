<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    // Postリレーション
    public function Post()
    {
        $this->hasOne(Post::class);
    }
}
