<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreCard extends Model
{
    use HasFactory;

    public $guarded = [];

    public function game(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function getScoreAttribute(): int
    {
        return $this->score();
    }

    public function score(): int
    {
        // Sum of all scores
        return array_sum([
            $this->ones,
            $this->twos,
            $this->threes,
            $this->fours,
            $this->fives,
            $this->sixes,
            $this->bonus,
            $this->one_pair,
            $this->two_pairs,
            $this->three_of_a_kind,
            $this->four_of_a_kind,
            $this->full_house,
            $this->small_straight,
            $this->large_straight,
            $this->yatzy,
            $this->chance,
        ]);
    }
}
