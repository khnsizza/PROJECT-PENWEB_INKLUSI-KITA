<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Seminar;

class SeminarController extends Controller
{
    public function index()
    {
        $seminar = Seminar::all();
        return view('seminar.index', compact(var_name: 'seminar'));
    }
}