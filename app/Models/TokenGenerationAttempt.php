<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenGenerationAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'attempts',
        'last_attempt_at',
        'timeout_until',
    ];

    protected $casts = [
        'last_attempt_at' => 'datetime',
        'timeout_until' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 