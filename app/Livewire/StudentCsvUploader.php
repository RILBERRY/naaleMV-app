<?php

namespace App\Livewire;

use App\Imports\StudentImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Maatwebsite\Excel\Facades\Excel;

class StudentCsvUploader extends ModalComponent
{
    use WithFileUploads;
    public $file;

    public function processFile() {
        Excel::import(new StudentImport, $this->file);
        $this->closeModalWithEvents([
            StudentList::class => 'studentUpdated'
        ]);
    }
    public function render()
    {
        return view('livewire.student-csv-uploader');
    }
}
