<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantListsController extends Controller
{
    //standard function to view AppList
    public function index()
    {
        return view('ApplicantLists');
    }

    //test function to view AppList via new testing Route
    public function viewApplicants()
    {
        return view('ApplicantLists');
    }
}
