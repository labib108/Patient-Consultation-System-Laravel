<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSoapOtherAnswer extends Model
{
    protected $fillable = ['appointment_id','treatment_goal','appointment_note'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
