<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_Touring_Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'touring_id'
    ];

    // Profileリレーション
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    // Profile_Touring_Favoriteリレーション
    public function touring()
    {
        return $this->belongsTo(Touring::class, 'touring_id');
    }
}
