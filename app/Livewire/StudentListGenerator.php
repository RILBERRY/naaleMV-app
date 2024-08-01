<?php

namespace App\Livewire;

use App\Models\Competition;
use App\Models\CompetitionStudent;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

class StudentListGenerator extends Component
{
    public $query = '';
    // public $sortField = 'id';
    // public $sortType = 'asc';

    public $competition;
    public $availableIncludeFields;

    function mount($id)
    {
        $this->availableIncludeFields = Student::$tableCols;

        $this->competition = Competition::findOrFail($id);
    }
    public function search()
    {
        $this->resetPage();
    }
    // function sortBy($sortField)
    // {
    //     if($this->sortField == $sortField && $this->sortType =="asc"){
    //         $this->sortType = 'desc';
    //     }else{
    //         $this->sortType = 'asc';
    //     }
    //     $this->sortField = $sortField;
    // }
    #[On('studentUpdated')]
    public function updateStudentsList()
    {
        $this->getStudents();
    }
    public function getStudents()
    {
        return CompetitionStudent::join('students', 'competition_students.student_id', '=', 'students.id') // Join the supplyer_info table
        ->where('competition_id', $this->competition->id)
        ->where(function ($query) {
            $query->where('students.name', 'like',  '%' . $this->query . '%')
                ->orWhere('students.nid', 'like', '%' . $this->query . '%')
                ->orWhere('students.index', 'like', '%' . $this->query . '%');
        })
        ->select('students.*')
        ->paginate(15);
    }
    public function render()
    {
        $participatedStudents = $this->getStudents();

        return view('livewire.student-list-generator', compact('participatedStudents'));
    }
}
