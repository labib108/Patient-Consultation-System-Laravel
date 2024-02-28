<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSoapAnswer extends Model
{
    protected $fillable = ['appointment_id','general_soap_question_id','general_soap_option_id','general_soap_answer'];
}
