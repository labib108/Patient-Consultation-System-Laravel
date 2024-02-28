<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSoapOption extends Model
{
    protected $fillable = ['general_soap_question_id','general_soap_option'];

    public function generalSoapQuestion()
    {
        return $this->belongsTo(GeneralSoapQuestion::class);
    }
}
