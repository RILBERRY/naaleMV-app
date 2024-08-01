<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static $tableCols = [
        'name' => 'Studen Name',
        'address' => 'Address',
        'island' => 'Island',
        'nid' => 'National ID',
        'dob' => 'Date of birth',
        'age_at_feb' => 'Age at feb',
        'gurdian_name' => 'Gurdian name',
        'gurdian_contact' => 'Gurdian contact',
        'grade_id' => 'Grade',
        'class' => 'Class',
        'index' => 'Index',
        'status' => 'Status',
    ];

    function grade() : BelongsTo {
        return $this->belongsTo(Grade::class);
    }

}
