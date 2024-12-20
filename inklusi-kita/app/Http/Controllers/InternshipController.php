<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Scholarship;

class InternshipController extends Controller
{
    public function index()
    {
        $internship = Internship::all();
        return view('internships.index', compact('internship'));
    }
}