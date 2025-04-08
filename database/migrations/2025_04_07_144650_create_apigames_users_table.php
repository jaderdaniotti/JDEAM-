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
        Schema::create('apigames_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apigame_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('apigame_id')->references('id')->on('apigames');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_apigames');
    }
};
