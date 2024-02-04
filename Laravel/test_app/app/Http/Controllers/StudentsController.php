<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Account;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('Students', ['students' => $students]);
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

        // Create the student
        $students = Student::create($request->all());

        return redirect()->route('/Students')->with('success', 'Student Added Successfully!');
    }
}

