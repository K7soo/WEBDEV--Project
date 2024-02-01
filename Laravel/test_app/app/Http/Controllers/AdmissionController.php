<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    
    //standard function to view AppList
    public function index()
    {   
        $applicants = Applicant::all();
        return view('Admission', ['applicants'=>$applicants]);

        $applicants = Applicant::with('applicantchoice')->get();
        $applicants = Applicant::with('applicanttype')->get();
        $applicants = Applicant::with('approval')->get();

        return view('Admission', ['applicants' => $applicants]);
    }

    //test function to view AppList via new testing Route
    // public function viewApplicants()
    // {
    //     return view('ApplicantLists');
    // }

}
