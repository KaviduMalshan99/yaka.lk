<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adsId')->nullable();
            $table->string('title');
            $table->string('url')->nullable();
            $table->unsignedBigInteger('location')->nullable();
            $table->unsignedBigInteger('sublocation')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('mainImage')->default(0)->nullable();
            $table->string('subImage')->default(0)->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('sub_cat_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('ads_package')->nullable();
            $table->unsignedBigInteger('package_type')->nullable();
            $table->timestamp('package_expire_at')->nullable();
            $table->timestamp('bump_up_at')->nullable();
            $table->unsignedBigInteger('view_counr')->default(0);
            $table->unsignedBigInteger('click_counr')->default(0);
            $table->unsignedBigInteger('price_type')->nullable();
            $table->unsignedBigInteger('post_type')->nullable();
            $table->string('status')->default('1');
            $table->timestamps();

//            $table->foreign('location')->references('id')->on('districts')->onDelete('cascade');
//            $table->foreign('sublocation')->references('id')->on('cities')->onDelete('cascade');
//            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->foreign('sub_cat_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('ads_package')->references('id')->on('packages')->onDelete('cascade');
//            $table->foreign('package_type')->references('id')->on('package_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
}
