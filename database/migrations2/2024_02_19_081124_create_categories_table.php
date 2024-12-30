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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->integer('mainId')->default(0); // Example column, adjust data type as needed
            $table->string('name');
            $table->string('url')->unique(); // Ensures that the URL is unique
            $table->text('description')->nullable(); // Adjust data type as needed
            $table->string('image')->nullable(); // Assuming image path, adjust data type as needed
            $table->tinyInteger('status')->default(1); // Example column, adjust data type as needed
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
