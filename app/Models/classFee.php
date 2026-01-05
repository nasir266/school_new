<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classFee extends Model
{
    protected $table = 'class_fee'; // your existing table name

    //  public $timestamps = false;.

    protected $fillable = [

        'fee',
        'fk_class_id',
        'addedBy',
        'fk_scl_id',
        'fk_campus_id',
        'status'
    ];
}
