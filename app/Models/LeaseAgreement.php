<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseAgreement extends Model
{
    protected $guarded = [];

    public function leaseAgreement()
    {
        return $this->belongsTo(LeaseAgreement::class);
    }

    public function financialTransactions()
    {
        return $this->hasMany(FinancialTransaction::class);
    }
}
