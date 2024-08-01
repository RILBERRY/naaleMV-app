<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\CompetitionStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

use function Spatie\LaravelPdf\Support\pdf;

class CompetitionStudentController extends Controller
{
    //
    public function remove($id, $studentId)
    {
        $student = CompetitionStudent::where([['competition_id',$id],['student_id', $studentId]])->first();
        $student->delete();
        return redirect(route('generate-list', $id));
    }

    public function export($id)
    {
        // $participants = CompetitionStudent::where('competition_id', $id)->get();
        $competition = Competition::where('id', $id)->first();
        $tableCols = Student::$tableCols;
        $competition->load('competitionStudents.students');
        // return response($tableCols );
        // return view('pdf.student-list', compact('competition','tableCols'));

        $pdf = Pdf::loadView('pdf.student-list', compact('competition', 'tableCols'));
        return $pdf->stream(Carbon::now()->toDateString() .'-'.$competition->name.'-students-list.pdf');


        // return Pdf()
        // ->view('pdf.student-list')
        // ->name('student-list-2023-04-10.pdf')
        //     ->download();
    }


}
