<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerPreference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'min_age', 'max_age', 'min_height_cm', 'max_height_cm',
        'marital_status', 'accepts_children', 'religion', 'caste', 'sect', 'mother_tongue',
        'education_level', 'profession', 'country', 'division', 'district',
        'diet', 'smoking', 'drinking', 'other_preferences',
        'min_annual_income', 'max_annual_income'
    ];

    protected $casts = [
        'accepts_children' => 'boolean',  // add this
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
