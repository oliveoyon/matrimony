<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'path', 'approved', 'is_primary', 'is_verified', 'caption'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
