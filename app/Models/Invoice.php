<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'user_id',
        'amount',
        'currency',
        'status',
        'issue_date',
        'due_date',
        'paid_date',
        'description',
        'line_items'
    ];

    protected $casts = [
        'line_items' => 'array',
        'amount' => 'decimal:2',
        'issue_date' => 'date',
        'due_date' => 'date',
        'paid_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}