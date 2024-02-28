<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSoapOption extends Model
{
    protected $fillable = ['basic_soap_question_id','basic_soap_option'];

    public function basicSoapQuestion()
    {
        return $this->belongsTo(BasicSoapQuestion::class);
    }
}
