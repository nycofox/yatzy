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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('room_code', 10)->nullable()->unique();
            $table->boolean('public')->default(false);
            $table->enum('status', ['waiting', 'playing', 'finished'])->default('waiting');
            $table->unsignedSmallInteger('max_players')->default(4);
            $table->string('created_by');
            $table->foreignId('current_turn')->nullable()->constrained('game_players')->nullOnDelete();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
