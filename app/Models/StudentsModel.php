<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = ["first_name", "last_name", "middle_name"];

   
    
    public function grades(){
        return $this->hasMany(GradesModel::class,  "student_id");
    }

    public function dept(){
        return $this->hasMany(DepartmentsModel::class,  "student_id");
    }


    public function users(){
        return $this->belongsTo(UserModel::class,  'user_id');
    }

}
