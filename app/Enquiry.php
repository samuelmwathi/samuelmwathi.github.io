<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable =[
        'email',
        'name',
        'phone',
        'subject',
        'status',
        'message'
    ];
}
