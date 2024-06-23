<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'touring_id',
        'comment'
    ];

    // Profileリレーション
    public function profile()
    {
        $this->belongsTo(Profile::class, 'profile_id');
    }

    // Touringリレーション
    public function touring()
    {
        $this->belongsTo(Touring::class, 'touring_id');
    }

    // Replyリレーション
    public function replies()
    {
        $this->hasMany(Reply::class, 'comment_id');
    }
}
