<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseAgreement extends Model
{
    protected $guarded = [];

    public function rentRequest()
    {
        return $this->belongsTo(RentRequest::class);
    }

    public function financialTransactions()
    {
        return $this->hasMany(FinancialTransaction::class);
    }

    public function paid(Type $var = null)
    {
        $total = 0;
        foreach($this->financialTransactions as $pay){
            $total += $pay->amount;
        }
        return $total;
    }

    public function balance()
    {
        return ($this->amount + $this->security_deposit) - $this->paid();
    }
}
