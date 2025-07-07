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
        // 5. Recipes Table
        // Stores core recipe information. Depends on 'users' table.
        Schema::create('reseps', function (Blueprint $table) {
            $table->id(); // Primary Key, auto-incrementing ID
            $table->string('name'); // Name of the recipe
            $table->text('description')->nullable(); // Detailed description, can be null
            $table->integer('prep_time_minutes'); // Preparation time in minutes
            $table->integer('cook_time_minutes'); // Cooking time in minutes
            $table->integer('servings'); // Number of servings
            $table->string('difficulty'); // Difficulty level (e.g., "Easy", "Medium", "Hard")
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
};
