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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fighter_id')->references('id')->on('fighters');
            $table->integer('win')->nullable();
            $table->integer('loss')->nullable();
            $table->integer('draw')->nullable();
            $table->integer('win_by_ko')->nullable();
            $table->integer('loss_by_ko')->nullable();
            $table->integer('win_by_sub')->nullable();
            $table->integer('loss_by_sub')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
