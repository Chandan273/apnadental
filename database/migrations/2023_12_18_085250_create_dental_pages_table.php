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
        Schema::create('dental_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->unsignedBigInteger('dental_service_id');
            $table->foreign('dental_service_id')->references('id')->on('dental_services')->onDelete('cascade');
            $table->string('heading_one');
            $table->string('image')->nullable();
            $table->text('description');
            $table->string('heading_two')->nullable();
            $table->text('description_two')->nullable();
            $table->text('doctors')->nullable();
            $table->text('clinics')->nullable();
            $table->string('faq_heading_one')->nullable();
            $table->text('faq_des_one')->nullable();
            $table->string('faq_heading_two')->nullable();
            $table->text('faq_des_two')->nullable();
            $table->string('faq_heading_three')->nullable();
            $table->text('faq_des_three')->nullable();
            $table->string('faq_heading_four')->nullable();
            $table->text('faq_des_four')->nullable();
            $table->string('faq_heading_five')->nullable();
            $table->text('faq_des_five')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_pages');
    }
};
