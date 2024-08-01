<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Competition extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'included_fields' => 'json',
        ];
    }
    function competitionStudents() : HasMany {
        return $this->hasMany(CompetitionStudent::class,  'competition_id', 'id');

    }

}
