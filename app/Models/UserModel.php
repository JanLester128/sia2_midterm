<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ["name", "email"];


    public function students(){
        return $this->hasMany(StudentsModel::class,  'user_id');
    }

}
