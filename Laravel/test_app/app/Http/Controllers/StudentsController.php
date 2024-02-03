<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Account;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Students', ['students'=>$students]);

    }

    public function AddStudent(Request $request)
{
    $request->validate([
        'StudentNo' => 'required|string',
        'StudLastName' => 'required|string',
        'StudFirstName' => 'required|string',
        'StudMiddleName' => 'nullable|string',
        'Suffix' => 'nullable|string',
        'Gender' => 'required|string',
        'StatusID' => 'nullable|exists:status,StatusID',
        'AccountID' => 'nullable|exists:account,AccountID',
        'YearLevelID' => 'nullable|exists:yearlevels,YearLevelID',
        'CourseID' => 'nullable|exists:course,CourseID',
        'SectionID' => 'nullable|exists:section,SectionID',
        'Email' => 'required|email|unique:account,email',
        'Password' => 'required|string',
        'accountType' => 'required|string',
    ]);

    // Create the account first
    $account = Account::create([
        'Email' => $request->input('Email'),
        'Password' => bcrypt($request->input('Password')),
        'accountType' => $request->input('accountType'),
    ]);

    // Then create the student with the assigned AccountID
    $request->merge(['AccountID' => $account->AccountID]);
    $student = Student::create($request->all());

    return redirect()->route('student.AddStudent')->with('success', 'Student Added Successfully!');
    }

    public function DeleteStudent($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect()->route('Students')->with('success', 'Student Removed!');
    }
}

