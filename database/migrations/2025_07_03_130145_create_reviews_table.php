<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 7. Reviews Table
        // Stores user reviews and ratings for recipes. Depends on 'recipes' and 'users' tables.
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Primary Key, auto-incrementing ID

            // Foreign Key to recipes table, cascade delete if recipe is deleted
            $table->foreignId('recipe_id')->constrained('reseps')->onDelete('cascade');

            $table->integer('rating')->unsigned(); // Rating (e.g., 1-5), unsigned to ensure positive value
            $table->text('comment')->nullable(); // Optional review comment, can be null

            $table->timestamps(); // created_at and updated_at

            // Ensures a user can only review a specific recipe once.
            // This prevents multiple reviews from the same user for the same recipe.
            $table->unique(['recipe_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
