<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
        protected $table = 'packages'; // your existing table name

    //  public $timestamps = false;.

    protected $fillable = [
        'fk_sh_id',
        'duration',
        'package',
        'addedBy'
    ];
}
