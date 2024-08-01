<?php

namespace App\Livewire;

use App\Models\Competition;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;

class CreateUpdateCompetition extends ModalComponent
{
    public $availableIncludeFields;
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
        }
    }

    public function create(){
        $this->validate([
            'competition.name' => 'required',
        ]);
        $this->competition['slug'] = Str::slug($this->competition['name']);
        Competition::create( $this->competition );
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
        $this->closeModalWithEvents([
            StudentCompetitionLists::class => 'competitionUpdated'
        ]);
    }

    public function render()
    {
        return view('livewire.create-update-competition');
    }
}
