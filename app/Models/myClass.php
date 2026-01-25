<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class myClass extends Model
{
    protected $table = 'class'; // your existing table name

    //  public $timestamps = false;.

    protected $fillable = [
        'className',
        'fee',
        'fee_type',
        'department',
        'sub_dep',
        'semester',
        'addedBy',
        'fk_scl_id',
        'fk_campus_id',
        'status'
    ];
}
