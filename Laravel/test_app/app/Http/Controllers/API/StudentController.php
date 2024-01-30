<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request){
       $student = Student::all();

       return response()->json([
            'students' => $student
       ]);
    }
}
