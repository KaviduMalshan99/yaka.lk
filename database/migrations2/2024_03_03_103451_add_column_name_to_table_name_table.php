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
        Schema::table('_hobby_sports_and_kids', function (Blueprint $table) {
            $table->unsignedBigInteger('adsId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('_hobby_sports_and_kids', function (Blueprint $table) {
            $table->dropColumn('adsId');
        });
    }
};
