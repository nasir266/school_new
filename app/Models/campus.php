<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class campus extends Model
{
    protected $table = 'campus'; // your existing table name

    //  public $timestamps = false;

    protected $fillable = [
        'campus_name',
        'principal',
        'location',
        'phone',
        'fk_u_id',
        'fk_scl_id',
        'addedBy',
        'status'
    ];
}
