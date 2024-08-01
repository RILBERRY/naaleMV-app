<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new student([
            'dob' => $row['dob'],
            'name' => $row['name'],
            'age_at_feb' => $row['age_at_feb'],
            'address' =>$row['address'],
            'island'=>$row['island'],
            'nid' => $row['nid'],
            'grade_id' => $row['grade'],
            'index' => $row['index'],
            'gurdian_name'=>$row['gurdian'],
            'gurdian_contact'=>$row['gurdian'],
        ]);
    }
}
