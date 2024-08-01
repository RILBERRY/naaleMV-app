<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetitionStudent extends Model
{
    use HasFactory;
    protected $guarded = [];

    function competitions() : BelongsTo {
        return $this->belongsTo(Competition::class,  'competition_id','id');

    }
    function students() : BelongsTo{
        return $this->belongsTo(Student::class,  'student_id','id');
    }
}
