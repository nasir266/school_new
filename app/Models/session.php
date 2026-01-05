<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $table = 'session'; // your existing table name

    //  public $timestamps = false;.

    protected $fillable = [
        'fk_campus_id',
        'fk_scl_id',
        'addedBy',
        'session',
        'department',
        'status',
    ];
}
