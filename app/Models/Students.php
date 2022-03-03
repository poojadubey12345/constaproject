<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['student_name','roll_no','sub1','sub2','sub3','sub4','sub5','sub1_score','sub2_score','sub3_score','sub4_score','sub5_score','image','student_class'];
}
