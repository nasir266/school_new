<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $table = 'section'; // your existing table name

    //  public $timestamps = false;.

    protected $fillable = [
        'section',
        'fk_class_id',
        'addedBy',
        'fk_scl_id',
        'fk_campus_id',
        'status'
    ];
}
