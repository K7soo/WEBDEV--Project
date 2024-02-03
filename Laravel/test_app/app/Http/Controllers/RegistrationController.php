<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        return view('Registration', ['applicants'=>$applicants]);

    }
}
