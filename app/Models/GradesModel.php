<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradesModel extends Model
{
    use HasFactory;
    protected $table = "grades";
    protected $fillable = ["midtermGrade", "finalGrade"];


    public function stud(){
        return $this->belongsTo(StudentsModel::class,  'student_id');
    }
    
}
