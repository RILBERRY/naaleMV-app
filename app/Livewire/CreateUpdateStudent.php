<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Models\Student;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateUpdateStudent extends ModalComponent
{
    public $teachingGrades;

    public $student = [
        'id' => null,
        'name' => null,
        'nid' => null,
        'dob' => null,
        'age_at_feb' => null,
        'grade_id' => null,
        'class' => null,
        'index' => null,
        'status' => 'active',
        'gurdian_contact' => null,
        'gurdian_name' => null,
        'address' => null,
        'island' => null,
    ];

    function mount($student_id=null)
    {
        if($student_id){
            $this->student = Student::findOrFail($student_id)->toArray();
        }
    }

    public function create(){
        $this->validate([
            'student.name' => 'required',
            'student.nid' => 'required',
            'student.dob' => 'required',
            'student.age_at_feb' => 'required',
            'student.address' => 'required',
            'student.island' => 'required',
            'student.gurdian_name' => 'required',
            'student.gurdian_contact' => 'required',
        ]);
        Student::create( $this->student );
        $this->closeModal();
    }
    public function update()
    {
        $this->validate([
            'student.name' => 'required',
            'student.nid' => 'required',
            'student.dob' => 'required',
            'student.age_at_feb' => 'required',
            'student.address' => 'required',
            'student.island' => 'required',
            'student.gurdian_name' => 'required',
            'student.gurdian_contact' => 'required',
        ]);

        $student = Student::findOrFail($this->student['id']);
        $student->update($this->student);
        $this->closeModalWithEvents([
            StudentList::class => 'studentUpdated'
        ]);
    }
    public function render()
    {
        $this->teachingGrades =  Grade::where('is_teaching', true)->get();
        return view('livewire.create-update-student');
    }
}
