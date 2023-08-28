<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id', 'service_id', 'company_name', 'first_name', 'last_name',
        'image', 'age', 'sex', 'email_1', 'email_2', 'rating', 'phone', 'specialization',
        'experience', 'website', 'location', 'work_timings', 'fee',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
