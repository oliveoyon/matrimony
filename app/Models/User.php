<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_admin',
        'is_active',
        'profile_completed'
    ];

    protected $hidden = ['password', 'remember_token'];

    // ===== Relationships =====
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function partnerPreference()
    {
        return $this->hasOne(PartnerPreference::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function primaryPhoto()
    {
        return $this->hasOne(Photo::class)->where('is_primary', true);
    }

    public function interestsSent()
    {
        return $this->hasMany(Interest::class, 'from_user_id');
    }

    public function interestsReceived()
    {
        return $this->hasMany(Interest::class, 'to_user_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function activeSubscription()
    {
        return $this->hasOne(Subscription::class)->where('status', 'active')->latest();
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
