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
        Schema::create('score_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('player_name');
            $table->string('ip_address')->nullable();
            $table->unsignedTinyInteger('ones')->nullable();
            $table->unsignedTinyInteger('twos')->nullable();
            $table->unsignedTinyInteger('threes')->nullable();
            $table->unsignedTinyInteger('fours')->nullable();
            $table->unsignedTinyInteger('fives')->nullable();
            $table->unsignedTinyInteger('sixes')->nullable();
            $table->unsignedTinyInteger('bonus')->nullable();
            $table->unsignedTinyInteger('one_pair')->nullable();
            $table->unsignedTinyInteger('two_pairs')->nullable();
            $table->unsignedTinyInteger('three_of_a_kind')->nullable();
            $table->unsignedTinyInteger('four_of_a_kind')->nullable();
            $table->unsignedTinyInteger('full_house')->nullable();
            $table->unsignedTinyInteger('small_straight')->nullable();
            $table->unsignedTinyInteger('large_straight')->nullable();
            $table->unsignedTinyInteger('yatzy')->nullable();
            $table->unsignedTinyInteger('chance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_cards');
    }
};
