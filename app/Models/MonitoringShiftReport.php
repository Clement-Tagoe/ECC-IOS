<?php

namespace App\Models;

use App\Enums\ShiftStatus;
use App\Enums\ShiftType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class MonitoringShiftReport extends Model
{
    use Userstamps, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'shift_type' => ShiftType::class,
        'status' => ShiftStatus::class,
    ];
}
