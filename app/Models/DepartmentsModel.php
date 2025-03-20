<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentsModel extends Model
{
    use HasFactory;

    
    protected $table = "departments";
    protected $fillable = ["department"];

    public function studs(){
        return $this->belongsTo(StudentsModel::class,  'student_id');
    }

}
