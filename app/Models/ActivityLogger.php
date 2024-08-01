<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLogger extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'data_from' => 'json',
            'data_to' => 'json',
        ];
    }

    function user() : BelongsTo {
       return $this->belongsTo(User::class);
    }
}
