<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewFile extends Model
{
    protected $fillable = [
        'folder',
        'filename',
        'path'
    ];
}
