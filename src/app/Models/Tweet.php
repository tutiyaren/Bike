<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'tweet'
    ];

    // Profileリレーション
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    // Profile_Tweet_Favoriteリレーション
    public function profile_tweet_favorites()
    {
        return $this->hasMany(Profile_Tweet_Favorite::class, 'tweet_id');
    }
}
