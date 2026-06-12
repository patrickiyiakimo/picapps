<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFinance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_spent',
        'outstanding_balance',
        'default_currency',
        'payment_methods',
        'bank_accounts'
    ];

    protected $casts = [
        'payment_methods' => 'array',
        'bank_accounts' => 'array',
        'total_spent' => 'decimal:2',
        'outstanding_balance' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}