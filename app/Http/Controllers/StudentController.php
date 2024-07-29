<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $teachingGrades =  Grade::where('is_teaching', true)->get();
        return view('pages.students',compact('teachingGrades'));
    }
}
