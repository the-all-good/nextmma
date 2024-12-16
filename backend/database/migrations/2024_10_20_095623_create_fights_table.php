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
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->integer('timestamp');
            $table->string('slug');
            $table->boolean('is_main');
            $table->string('category')->nullable();
            $table->string('status');
            $table->integer('fighter_1_id');
            $table->integer('fighter_2_id');
            $table->integer('fighter_win_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fights');
    }
};
