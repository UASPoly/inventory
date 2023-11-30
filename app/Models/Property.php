<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public function leaseAgreements()
    {
        return $this->hasMany(LeaseAgreement::class);
    }

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function communicationLogs()
    {
        return $this->hasMany(CommunicationLog::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
