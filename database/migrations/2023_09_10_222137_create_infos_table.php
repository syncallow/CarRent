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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('steps_title');
            $table->string('steps_desc');
            $table->string('cars_title');
            $table->string('cars_desc');
            $table->string('features_title');
            $table->string('features_desc');
            $table->text('footer_text');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->text('copyright_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
