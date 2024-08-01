<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        // $teachingGrades =  Grade::where('is_teaching', true)->get();
        // $students =  Student::paginate(15);
        return view('pages.students');
    }

    public function competitionList () {
        return View('pages.competition-list');
    }
    public function generateList ($id) {
        return View('pages.list-generator', compact('id'));
    }
}
