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
        $this->belongsTo(User::class, 'user_id');
    }

    // Genderリレーション
    public function gender()
    {
        $this->belongsTo(Gender::class, 'gender_id');
    }

    // Ageリレーション
    public function age()
    {
        $this->belongsTo(Age::class, 'age_id');
    }

    // Profile_Imageリレーション
    public function profile_image()
    {
        $this->hasOne(Profile_Image::class, 'profile_id');
    }

    // Tweetリレーション
    public function tweets()
    {
        $this->hasMany(Tweet::class, 'profile_id');
    }

    // Profile_Tweet_Favoriteリレーション
    public function profile_tweet_favorites()
    {
        $this->hasMany(Profile_Tweet_Favorite::class, 'profile_id');
    }

    // Touringリレーション
    public function tourings()
    {
        $this->hasMany(Touring::class, 'profile_id');
    }

    // Commentリレーション
    public function comments()
    {
        $this->hasMany(Comment::class, 'profile_id');
    }

    // Profile_Touring_Favoriteリレーション
    public function profile_touring_favorites()
    {
        $this->hasMany(Profile_Touring_Favorite::class, 'profile_id');
    }

    // Replyリレーション
    public function replies()
    {
        $this->hasMany(Reply::class, 'profile_id');
    }

    // Food_Scenery_Postリレーション
    public function food_scenery_posts()
    {
        $this->hasMany(Food_Scenery_Post::class, 'profile_id');
    }

    // Postリレーション
    public function posts()
    {
        $this->hasMany(Post::class, 'profile_id');
    }
}
