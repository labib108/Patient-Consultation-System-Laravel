<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSoapOtherQuestionAnswer extends Model
{
    protected $fillable = ['appointment_id','treatment_goal','image','subjective','objective','assessment','plan','document'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}

