<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSoapAnswer extends Model
{
    protected $fillable = ['appointment_id','basic_soap_question_id','basic_soap_option_id','basic_soap_answer'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function basicSoapQuestion()
    {
        return $this->belongsTo(BasicSoapQuestion::class);
    }

    public function basicSoapOption()
    {
        return $this->belongsTo(BasicSoapOption::class);
    }

}
