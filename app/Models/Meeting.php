<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'meet_link',
        'scheduled_at',
        'status',
        'notes'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}