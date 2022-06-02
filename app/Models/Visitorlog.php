<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitorlog extends Model
{
    use HasFactory;

    protected $primary_key = 'id';

    protected $fillable =[
    'visitor_name','visitor_address','visitor_phone_number','staff_to_see','tag_number','signature','purpose','visitor_time_out','staff_company'
    ];
}
