<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompetitionStudent extends Model
{
    use HasFactory;
    protected $guarded = [];

    function competitions() : BelongsToMany {
        return $this->belongsToMany(Competition::class);
    }
    function students() : BelongsToMany {
        return $this->belongsToMany(Student::class);
    }
}