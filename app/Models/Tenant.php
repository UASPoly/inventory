<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = [];

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function leaseAgreements()
    {
        return $this->hasMany(LeaseAgreement::class);
    }

    public function communicationLogs()
    {
        return $this->hasMany(CommunicationLog::class);
    }

    public function rentRequests()
    {
        return $this->hasMany(RentRequest::class);
    }

    public function hasRequest(Property $property)
    {
        return $this->rentRequests->where('property_id', $property->id)->first();
    }
}
