<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['firstname', 'middlename','lastname', 'phone', 'address', 'email', 'dob','gender','date'];
}
