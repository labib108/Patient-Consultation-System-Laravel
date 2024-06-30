<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSoapAnswer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['patient_id','patient_data'];

}
