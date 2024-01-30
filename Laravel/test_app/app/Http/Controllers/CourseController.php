<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
        return view('CourseList');
    }
=======
        $courses = Course::all();

        return view('CourseList', ['courses'=>$courses]);
    }

    public function AddCourse(Request $request)
    {
        $request->validate([
            'CourseName' => 'required|string',
            'CourseCode' => 'required|string',
        ]);

        Course::create($request->all());

        return redirect()->route('course.AddCourse')->with('success', 'Course Added Successfully!');

    }

    public function DeleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('course.DeleteCourse')->with('success', 'Course Removed!');
    }

>>>>>>> Stashed changes
}
