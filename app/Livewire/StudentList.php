<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

class StudentList extends Component
{

    public $query = '';
    public $sortField = 'id';
    public $sortType = 'asc';

    public function search()
    {
        $this->resetPage();
    }
    function sortBy($sortField)
    {
        if($this->sortField == $sortField && $this->sortType =="asc"){
            $this->sortType = 'desc';
        }else{
            $this->sortType = 'asc';
        }
        $this->sortField = $sortField;
    }
    #[On('studentUpdated')]
    public function updateStudentsList()
    {
        $this->getStudents();
    }
    public function getStudents()
    {
        return Student::where('name', 'like',  '%' . $this->query . '%')
        ->orWhere('nid', 'like', '%' . $this->query . '%')
        ->orWhere('index', 'like', '%' . $this->query . '%')
        ->orderBy($this->sortField, $this->sortType)->paginate(15);
    }

    public function render()
    {
        $students = $this->getStudents();
        // $this->students =  Student::paginate(15);
        return view('livewire.student-list', compact('students'));
    }
}
