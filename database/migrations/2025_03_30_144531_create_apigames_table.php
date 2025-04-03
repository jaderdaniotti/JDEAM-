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
        Schema::create('apigames', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id')->unique();
            $table->string('title');
            $table->string('thumbnail');
            $table->text('short_description')->nullable();
            $table->string('game_url');
            $table->string('genre');
            $table->string('platform');
            $table->string('publisher')->nullable();
            $table->string('developer')->nullable();
            $table->date('release_date')->nullable();
            $table->string('freetogame_profile_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apigames');
    }
};
