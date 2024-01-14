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
        Schema::create('medication_details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->foreignId('medication_id')->constrained('medications')->onDelete('cascade');
            $table->text('indications')->nullable()->comment('適應症');
            $table->text('not_suitable_for')->nullable()->comment('不適合的人群');
            $table->text('possible_side_effects')->nullable()->comment('可能的副作用');
            $table->longText('administration')->comment('服用方法');
            $table->string('packaging')->comment('包裝');
            $table->string('photo_path')->nullable()->comment('照片路徑');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_details');
    }
};
