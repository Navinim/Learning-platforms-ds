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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('title');
            $table->string('banner')->nullable();
            $table->string('slug')->unique();
            $table->string('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->string('h_student')->nullable();
            $table->string('workshop')->nullable();
            $table->string('trained')->nullable();
            $table->string('explore_title')->nullable();
            $table->string('explore_details')->nullable();
            $table->json('highlight')->nullable();
            $table->text('tab_description')->nullable();
            $table->text('tab_outcomes')->nullable();
            $table->text('course_modal')->nullable();
            $table->json('learning')->nullable();
            $table->foreignId('course_category_id')->constrained('course_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
