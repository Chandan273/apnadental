<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'company_name', 'first_name', 'last_name', 'description', 'image', 'age', 'sex', 'email_1', 'email_2', 'email_3', 'rating', 'phone', 'specialization', 'experience', 'website', 'location', 'work_timings', 'fee', 'type', 'main_category', 'secondary_category', 'rating_count', 'education', 'keyword', 'latitude', 'longitude', 'locality', 'city', 'state', 'zip_code', 'administrative_area_level_1', 'country', 'map_url', 'tags'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
