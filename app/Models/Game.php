<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $guarded = [];

    public function scoreCards()
    {
        return $this->hasMany(ScoreCard::class);
    }

}
