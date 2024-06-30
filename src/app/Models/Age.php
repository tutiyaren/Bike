<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;

    protected $fillable = [
        'age'
    ];

    // Profileリレーション
    public function profile()
    {
        $this->hasOne(Profile::class, 'age_id');
    }
}
