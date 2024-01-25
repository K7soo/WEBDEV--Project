<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantListsController extends Controller
{
    //standard function to view AppList
    public function index()
    {   
        $applicants = Applicant::all();
        return view('ApplicantLists', ['applicants'=>$applicants]);
    }

    //test function to view AppList via new testing Route
    public function viewApplicants()
    {
        return view('ApplicantLists');
    }
}
