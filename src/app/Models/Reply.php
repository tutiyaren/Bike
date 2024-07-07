<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'comment_id',
        'comment'
    ];

    // Profileリレーション
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    // Commentリレーション
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
