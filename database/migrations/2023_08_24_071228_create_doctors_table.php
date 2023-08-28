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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('image')->nullable();
            $table->integer('age');
            $table->string('sex');
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->decimal('rating', 4, 2);
            $table->string('phone');
            $table->string('specialization');
            $table->string('experience');
            $table->string('website')->nullable();
            $table->string('location');
            $table->string('work_timings');
            $table->string('fee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
