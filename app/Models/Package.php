<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'duration_days', 'profile_view_limit',
        'contact_limit', 'photo_access', 'highlight_profile'
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
