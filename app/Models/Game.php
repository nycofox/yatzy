<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = [];
    public $with = ['scoreCards'];

    public function scoreCards(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScoreCard::class);
    }

    public function getNumberOfPlayersAttribute()
    {
        return $this->scoreCards()->count();
    }

    public function scopeActiveGames($query)
    {
        return $query->where('status', 'waiting')->orWhere('status', 'playing');
    }

}
