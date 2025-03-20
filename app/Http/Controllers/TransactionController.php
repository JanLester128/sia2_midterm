<?php

namespace App\Http\Controllers;

use App\Models\DepartmentsModel;
use App\Models\GradesModel;
use App\Models\StudentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{

    
    // public function getStudents(){
    //     $exam = DB::select('SELECT  students.first_name, students.last_name, students.middle_name FROM students
    //     INNER JOIN departments ON students.id = departments.id
    //     INNER JOIN grades ON students.id = grades.id');
        
    //     return view('sample', compact('exam'));
    // }


    //Eloquent
    public function getStudents(){
        $exam = StudentsModel::with(['dept', 'grades'])->get();

        // return response()->json( ['success' => true, 'Employee' => $exam], 200);
         return view('sample', compact('exam'));
    }

    //Advance Eloquent
    // public function getStudents(){
    //     $exam = StudentsModel::with(['dept' => function($q){
    //         $q->select('*');
    //     }])->with(['grades' => function($q){
    //         $q->select('*');
    //     }])->get();

    //     // return response()->json( ['success' => true, 'Employee' => $exam], 200);
    //     return view('sample', compact('exam'));
    // }

}
