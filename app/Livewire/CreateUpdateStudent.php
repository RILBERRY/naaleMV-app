<?php

namespace App\Livewire;

use App\Http\Controllers\ActivityLoggerController;
use App\Models\Grade;
use App\Models\Student;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateUpdateStudent extends ModalComponent
{
    public $teachingGrades;
    public $data;

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
            $this->data = [
                'table_name' => 'Student',
                'user_id' => auth()->user()->id,
                'data_from' => $this->student,
                'data_to' => [],
            ];
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
        $student = Student::create( $this->student );
        $data = [
            'table_name' => 'Student',
            'user_id' => auth()->user()->id,
            'data_from' => [],
            'data_to' => $student,
        ];

        $activityLogger = new ActivityLoggerController();
        $activityLogger->logActivity($data);
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
        $this->data['data_to'] = $student;
        $activityLogger = new ActivityLoggerController();
        $activityLogger->logActivity($this->data);

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
