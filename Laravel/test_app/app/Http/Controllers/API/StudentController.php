<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    // public function index(){
    //     $students = Student::all();

    //     return response()->json([
    //         'students' => $students
    //     ]);
    // }

    // public function index(){
    //     $students = Student::select(
    //         'StudentID',
    //         'StudentNo',
    //         'StudLastName',
    //         'StudFirstName',
    //         'StudMiddleName',
    //         'Suffix',
    //         'Gender',
    //     )
    //     ->with([
    //         'status:StatusID, Status',
    //         'account:AccountID, Email, Password, accountType',
    //         'yearlevels:YearLevelID, YearLevelName',
    //         'course:CourseID, CourseName',
    //         'section:SectionID, SectionNo',
    //     ])
    //     ->get();

    //     return response()->json([
    //         'students' => $students
    //     ]);
    // }

    public function index(){
        $students = Student::all();
    
        // Manually fetch related data for each student
        $studentsWithDetails = $students->map(function ($student) {
            return [
                'StudentID' => $student->StudentID,
                'StudentNo' => $student->StudentNo,
                'StudLastName' => $student->StudLastName,
                'StudFirstName' => $student->StudFirstName,
                'StudMiddleName' => $student->StudMiddleName,
                'Suffix' => $student->Suffix,
                'Gender' => $student->Gender,

                //'StatusID' => $student->status->StatusID,
                'Status' => $student->status->Status,
                //'AccountID' => $student->account->AccountID,
                'Email' => $student->account->Email,
                'Password' => $student->account->Password,
                'accountType' => $student->account->accountType,
                'YearLevelID' => $student->yearlevels->YearLevelID,
                //'YearLevelName' => $student->yearlevels->YearLevelName,
                //'CourseID' => $student->course->CourseID,
                'CourseName' => $student->course->CourseName,
                'SectionID' => $student->section->SectionID,
                //'SectionNo' => $student->section->SectionNo,
            ];
        });
    
        return response()->json([
            'students' => $studentsWithDetails,
        ]);
    }
}
