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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->text('content');
            $table->date('date');
            $table->boolean('is_published')->default(true);
            $table->unsignedBigInteger('author_id');
            $table->softDeletes();

            $table->index('author_id', 'author_post_author_idx');
            $table->foreign('author_id', 'author_post_author_fk')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
