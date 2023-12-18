<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'dental_service_id',
        'heading_one',
        'image',
        'description', 
        'heading_two',
        'description_two',
        'doctors', 
        'clinics',
        'faq_heading_one',
        'faq_des_one', 
        'faq_heading_two',
        'faq_des_two',
        'faq_heading_three',
        'faq_des_three',
        'faq_heading_four',
        'faq_des_four',
        'faq_heading_five',
        'faq_des_five'
    ];
}
