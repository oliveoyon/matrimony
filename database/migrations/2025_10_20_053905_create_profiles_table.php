<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Basic info
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('dob')->nullable();
            $table->integer('height_cm')->nullable();
            $table->integer('weight_kg')->nullable();
            $table->string('marital_status')->nullable(); // Never Married, Divorced, Widowed
            $table->boolean('has_children')->default(false);
            $table->string('blood_group')->nullable();
            $table->string('disability')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('complexion')->nullable();

            // Religion & Community
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('sect')->nullable(); // e.g. Sunni, Hanafi (added)
            $table->string('mother_tongue')->nullable();

            // Education & Profession
            $table->string('education_level')->nullable(); // e.g. BSc, MSc, PhD
            $table->string('education_field')->nullable();
            $table->string('education_institution')->nullable(); // added
            $table->string('profession')->nullable();
            $table->string('designation')->nullable(); // added
            $table->string('organization')->nullable();
            $table->integer('annual_income')->nullable();
            $table->text('career_description')->nullable(); // added

            // Location
            $table->string('country')->default('Bangladesh');
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('home_district')->nullable();

            // Contact preferences
            $table->string('phone')->nullable(); // optional
            $table->string('email')->nullable(); // optional
            $table->boolean('show_contact')->default(false); // control visibility

            // Lifestyle
            $table->string('diet')->nullable(); // Veg, Non-Veg, etc.
            $table->string('smoking')->nullable();
            $table->string('drinking')->nullable();
            $table->string('hobbies')->nullable(); // added
            $table->string('interests')->nullable(); // added

            // Family
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->integer('brothers')->nullable();
            $table->integer('sisters')->nullable();
            $table->string('family_type')->nullable(); // Joint/Nuclear
            $table->text('family_values')->nullable(); // added

            // About
            $table->text('about_me')->nullable();
            $table->text('expectation')->nullable();

            // Visibility & status
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_visible')->default(true);
            $table->string('profile_status')->default('active'); // added for easy filtering

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
