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
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('type')->nullable()->after('description');
            $table->string('main_category')->nullable()->after('type');
            $table->string('secondary_category')->nullable()->after('main_category');
            $table->integer('rating_count')->default(0)->after('rating');
            $table->string('education')->nullable()->after('specialization');
            $table->string('keyword')->nullable()->after('education');
            $table->decimal('latitude', 10, 7)->after('location');
            $table->decimal('longitude', 10, 7)->after('latitude');
            $table->string('locality')->after('longitude');
            $table->string('city')->after('locality');
            $table->string('state')->after('city');
            $table->string('zip_code')->after('state');
            $table->string('administrative_area_level_1')->after('zip_code');
            $table->string('country')->after('administrative_area_level_1');
            $table->string('map_url')->after('country');
            $table->string('tags')->after('fee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn(['type', 'main_category', 'secondary_category', 'rating_count', 'education', 'keyword', 'latitude', 'longitude', 'locality', 'city', 'state', 'zip_code', 'administrative_area_level_1', 'country', 'map_url']);
        });
    }
};
