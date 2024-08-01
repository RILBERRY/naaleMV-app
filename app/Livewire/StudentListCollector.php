<?php

namespace App\Livewire;

use App\Models\Competition;
use App\Models\CompetitionStudent;
use App\Models\Student;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class StudentListCollector extends ModalComponent
{
    public $students;
    public $selectedIdArray = [];
    public $selectAll = false;
    public $query = '';
    public $competition;

    function mount($competition_id)
    {
        $this->competition = Competition::findOrFail($competition_id);
    }

    public function actionToAllValue()
    {
        $this->selectAll = !$this->selectAll;
    }
    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedIdArray = $this->students->pluck('id')->toArray();
        } else {
            $this->selectedIdArray = [];
        }
    }
    public function addSelectedStudents()
    {
        $nextStudentsRank = 1;
        $lastStudent = CompetitionStudent::where('competition_id', $this->competition->id)->latest()->first();
        if($lastStudent){
            $nextStudentsRank = $lastStudent->ranking + 1 ;
        }

        foreach($this->selectedIdArray as $studentId){
            $registeredStudent = CompetitionStudent::where([['competition_id', $this->competition->id],['student_id', $studentId]])->first();
            if(!$registeredStudent){
                CompetitionStudent::create([
                    'Competition_id'=> $this->competition->id,
                    'student_id'=> $studentId,
                    'ranking'=> $nextStudentsRank,
                ]);
                $nextStudentsRank++;
            }
        }
        $this->closeModalWithEvents([
            StudentListGenerator::class => 'studentUpdated'
        ]);

    }

    public function getStudents()
    {
        $this->selectAll = false;
        $this->selectedIdArray = [];


        $this->students = Student::where('name', 'like',  '%' . $this->query . '%')
        ->orWhere('nid', 'like', '%' . $this->query . '%')
        ->orWhere('index', 'like', '%' . $this->query . '%')
        ->orWhere('dob', 'like', '%' . $this->query . '%')
        ->get(['id','name','nid','index','dob']);
    }
    public function render()
    {
        return view('livewire.student-list-collector');
    }
}
