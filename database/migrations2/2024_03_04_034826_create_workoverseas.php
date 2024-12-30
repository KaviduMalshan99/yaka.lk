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
        Schema::create('workoverseas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adsId');
            $table->string('industry')->nullable();
            $table->string('type')->nullable();
            $table->string('apply_via')->nullable();
            $table->string('company_web')->nullable();
            $table->string('application_deadline')->nullable();
            $table->string('study_area')->nullable();
            $table->string('university')->nullable();
            $table->string('study_destination')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workoverseas');
    }
};
