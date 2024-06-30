<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_Tweet_Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'tweet_id'
    ];

    // Profileリレーション
    public function profiles()
    {
        $this->belongsTo(Profile::class, 'profile_id');
    }

    // Tweetリレーション
    public function tweets()
    {
        $this->belongsTo(Tweet::class, 'tweet_id');
    }
}
