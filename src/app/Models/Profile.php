<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gender_id',
        'age_id',
        'nickname'
    ];

    // Userリレーション
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Genderリレーション
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    // Ageリレーション
    public function age()
    {
        return $this->belongsTo(Age::class, 'age_id');
    }

    // Profile_Imageリレーション
    public function profile_image()
    {
        return $this->hasOne(Profile_Image::class, 'profile_id');
    }

    // Tweetリレーション
    public function tweets()
    {
        return $this->hasMany(Tweet::class, 'profile_id');
    }

    // Profile_Tweet_Favoriteリレーション
    public function profile_tweet_favorites()
    {
        return $this->hasMany(Profile_Tweet_Favorite::class, 'profile_id');
    }

    // Touringリレーション
    public function tourings()
    {
        return $this->hasMany(Touring::class, 'profile_id');
    }

    // Commentリレーション
    public function comments()
    {
        return $this->hasMany(Comment::class, 'profile_id');
    }

    // Profile_Touring_Favoriteリレーション
    public function profile_touring_favorites()
    {
        return $this->hasMany(Profile_Touring_Favorite::class, 'profile_id');
    }

    // Replyリレーション
    public function replies()
    {
        return $this->hasMany(Reply::class, 'profile_id');
    }

    // Food_Postリレーション
    public function food_posts()
    {
        return $this->hasMany(Food_Post::class, 'profile_id');
    }

    // Scenery_Postリレーション
    public function scenery_posts()
    {
        return $this->hasMany(Scenery_Post::class, 'profile_id');
    }

    protected $table = 'profiles';
}
