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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('url')->nullable();
            $table->string('company')->nullable();
            $table->string('postCode')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('birthday')->nullable();
            $table->string('profileImage')->nullable();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('roles')->default(USER);
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('location')->nullable();
            $table->string('sub_location')->nullable();
            $table->string('key')->nullable();
            $table->string('status')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
