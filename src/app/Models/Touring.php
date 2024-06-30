<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touring extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'day_id',
        'distance_id',
        'date',
        'destination',
        'content'
    ];

    // Dayリレーション
    public function day()
    {
        $this->belongsTo(Day::class, 'day_id');
    }

    // Distanceリレーション
    public function distance()
    {
        $this->belongsTo(Distance::class, 'distance_id');
    }

    // Profileリレーション
    public function profile()
    {
        $this->belongsTo(Profile::class, 'profile_id');
    }

    // Commentリレーション
    public function comments()
    {
        $this->hasMany(Comment::class, 'touring_id');
    }

    // Profile_Touring_Favoriteリレーション
    public function profile_touring_favorites()
    {
        $this->hasMany(Profile_Touring_Favorite::class, 'touring_id');
    }
}
