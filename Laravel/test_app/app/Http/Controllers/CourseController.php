<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('CourseList', ['courses'=>$courses]);
    }

    public function AddCourse(Request $request)
    {
        
        $request->validate([
            'CourseName' => 'required|string',
            'CourseCode' => 'required|string',
            'TotalCredits' => 'required|integer',
        ]);

        Course::create($request->all());

        return redirect()->route('CourseList')->with('success', 'Course Added Successfully!');
    
    }


}
