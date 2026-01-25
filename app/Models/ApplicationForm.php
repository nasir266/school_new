<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $table = 'application_form';
//    public $timestamps = true; // 👈 IMPORTANT

    protected $guarded = [];
//    protected $fillable = [
//        'name',
//        'contact',
//        'address',
//        'reference',
//        'purpose',
//    ];
}
