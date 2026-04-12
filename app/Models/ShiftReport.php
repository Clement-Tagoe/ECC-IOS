<?php

namespace App\Models;

use App\Enums\ShiftType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShiftReport extends Model
{
    protected $guarded = [];

    protected $casts = [
        'shift_type' => ShiftType::class,
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
