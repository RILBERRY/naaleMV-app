<?php

namespace App\Livewire;

use App\Models\Competition;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class StudentCompetitionLists extends ModalComponent
{
    public $query = '';
    public $sortField = 'id';
    public $sortType = 'asc';
    public $availableIncludeFields;

    function mount()
    {
        $this->availableIncludeFields = Student::$tableCols;
    }
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

    #[On('competitionUpdated')]
    public function updateStudentsList()
    {
        $this->getCompetitionList();
    }


    public function getCompetitionList()
    {
        return Competition::where('name', 'like',  '%' . $this->query . '%')
        ->orderBy($this->sortField, $this->sortType)->paginate(15);
    }

    public function render()
    {
        $competitions = $this->getCompetitionList();
        return view('livewire.student-competition-lists', compact('competitions'));
    }
}
