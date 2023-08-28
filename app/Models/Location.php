<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'latitude', 'longitude', 'locality', 'city', 'state', 'zip_code',
        'administrative_area_level_1', 'country',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'location_id');
    }
}