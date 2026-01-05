<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $table = 'schools'; // your existing table name

    //  public $timestamps = false;

    protected $fillable = [
        'owner_name',
        'owner_email',
        'owner_number',
        'owner_tel',
        'prin_name',
        'prin_email',
        'prin_number',
        'prin_tel',
        'scl_tel',
        'slogn',
        'address',
        'land',
        'joinDate',
        'fk_u_id',
        'addedBy',
        'status'
    ];
}
