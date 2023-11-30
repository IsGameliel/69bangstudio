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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('privacy')->nullable();
            // $table->string('individual')->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('models_present');
            $table->string('new_models')->nullable();
            $table->string('block_countries')->nullable();
            $table->string('agree');
            $table->string('file');
            $table->enum('status', ['published', 'draft']);
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
