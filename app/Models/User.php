<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'company_name', 'phone', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function finances()
    {
        return $this->hasOne(UserFinance::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    // Accessors
    public function getTotalSpentAttribute()
    {
        return $this->finances ? $this->finances->total_spent : 0;
    }

    public function getOutstandingBalanceAttribute()
    {
        return $this->finances ? $this->finances->outstanding_balance : 0;
    }
}