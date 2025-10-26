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
        Schema::create('partner_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Basic preference
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->integer('min_height_cm')->nullable();
            $table->integer('max_height_cm')->nullable();
            $table->string('marital_status')->nullable();
            $table->boolean('accepts_children')->default(false);

            // Religion & Community
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('sect')->nullable(); // added for match with profile
            $table->string('mother_tongue')->nullable();

            // Education & Profession
            $table->string('education_level')->nullable();
            $table->string('profession')->nullable();

            // Location
            $table->string('country')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();

            // Lifestyle
            $table->string('diet')->nullable();
            $table->string('smoking')->nullable();
            $table->string('drinking')->nullable();

            // Expectations
            $table->text('other_preferences')->nullable();
            $table->integer('min_annual_income')->nullable();
            $table->integer('max_annual_income')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
