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
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('photo')->nullable();
            $table->char('gender');
            $table->date('birth_date')->nullable();
            $table->string('height');
            $table->string('weight');
            $table->string('reach');
            $table->string('stance')->nullable();
            $table->string('category');
            $table->integer('last_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fighters');
    }
};
