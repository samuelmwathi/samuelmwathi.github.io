<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientQuote extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'quote',
        'name',
        'position',
        'company'
    ];
}
