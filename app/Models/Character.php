<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'hp',
        'atk',
        'coins',
        'stamina',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
