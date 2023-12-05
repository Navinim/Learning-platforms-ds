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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('open')->nullable();
            $table->string('phone')->nullable();
            $table->string('iframe')->nullable();
            $table->string('logo_main')->nullable();
            $table->string('favicon')->nullable();
            $table->string('meta')->nullable();
            $table->string('logo_footer')->nullable();
            $table->string('footer_details')->nullable();
            $table->text('why_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
