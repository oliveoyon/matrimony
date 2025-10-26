<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'gender', 'dob', 'height_cm', 'weight_kg',
        'marital_status', 'has_children', 'blood_group', 'disability', 'eye_color',
        'hair_color', 'complexion', 'religion', 'caste', 'sect', 'mother_tongue',
        'education_level', 'education_field', 'education_institution', 'profession',
        'designation', 'organization', 'annual_income', 'career_description',
        'country', 'division', 'district', 'city', 'address', 'home_district',
        'phone', 'email', 'show_contact', 'diet', 'smoking', 'drinking', 'hobbies',
        'interests', 'father_name', 'mother_name', 'father_occupation', 'mother_occupation',
        'brothers', 'sisters', 'family_type', 'family_values', 'about_me', 'expectation',
        'is_verified', 'is_visible', 'profile_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
