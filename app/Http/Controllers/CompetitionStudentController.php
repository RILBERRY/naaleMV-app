<?php

namespace App\Http\Controllers;

use App\Models\CompetitionStudent;
use Illuminate\Http\Request;

class CompetitionStudentController extends Controller
{
    //
    public function remove($id, $studentId)
    {
        $student = CompetitionStudent::where([['competition_id',$id],['student_id', $studentId]])->first();
        $student->delete();
        return redirect(route('generate-list', $id));
    }

    public function export()
    {

    }


}
