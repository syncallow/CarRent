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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->date('date');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('post_id');
            $table->softDeletes();

            $table->index('author_id', 'author_comment_author_idx');
            $table->index('post_id', 'post_comment_post_idx');
            $table->foreign('author_id', 'author_comment_author_fk')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_id', 'post_comment_post_fk')->on('posts')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
