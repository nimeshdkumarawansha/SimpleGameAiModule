<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerResponse extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_id',
        'question_id',
        'player_answer',
        'is_correct',
        'attempts',
        'time_taken',
    ];
}
