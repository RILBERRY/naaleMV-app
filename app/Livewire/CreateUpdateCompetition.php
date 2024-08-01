<?php

namespace App\Livewire;

use App\Http\Controllers\ActivityLoggerController;
use App\Models\Competition;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;

class CreateUpdateCompetition extends ModalComponent
{
    public $availableIncludeFields;
    public $data;
    public $competition = [
        'id' => null,
        'name' => null,
        'slug' => null,
        'included_fields' => null,
        'status' => 'open',
    ];
    function mount($competition_id=null)
    {
        $this->availableIncludeFields = Student::$tableCols;
        $this->competition['included_fields'] = array_keys($this->availableIncludeFields);
        if($competition_id){
            $this->competition = Competition::findOrFail($competition_id)->toArray();
            $this->data = [
                'table_name' => 'Competition',
                'user_id' => auth()->user()->id,
                'data_from' => $this->competition,
                'data_to' => [],
            ];
        }
    }

    public function create(){
        $this->validate([
            'competition.name' => 'required',
        ]);
        $this->competition['slug'] = Str::slug($this->competition['name']);
        $competition = Competition::create( $this->competition );
        $data = [
            'table_name' => 'Competition',
            'user_id' => auth()->user()->id,
            'data_from' => [],
            'data_to' => $competition,
        ];

        $activityLogger = new ActivityLoggerController();
        $activityLogger->logActivity($data);

        $this->closeModalWithEvents([
            StudentCompetitionLists::class => 'competitionUpdated'
        ]);
    }
    public function update()
    {
        $this->validate([
            'competition.name' => 'required',
        ]);

        $this->competition['slug'] = Str::slug($this->competition['name']);

        $competition = Competition::findOrFail($this->competition['id']);

        $competition->update($this->competition);

        $this->data['data_to'] = $competition;
        $activityLogger = new ActivityLoggerController();
        $activityLogger->logActivity($this->data);

        $this->closeModalWithEvents([
            StudentCompetitionLists::class => 'competitionUpdated'
        ]);
    }

    public function render()
    {
        return view('livewire.create-update-competition');
    }
}
