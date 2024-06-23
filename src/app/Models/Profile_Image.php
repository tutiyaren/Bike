<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'my_image'
    ];

    // Profileリレーション
    public function profile()
    {
        $this->belongsTo(Profile::class, 'profile_id');
    }
}
