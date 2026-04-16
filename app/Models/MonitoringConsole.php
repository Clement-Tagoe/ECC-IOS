<?php

namespace App\Models;

use App\Enums\ConsoleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class MonitoringConsole extends Model
{
    use Userstamps, SoftDeletes;
    
    protected $guarded = [];

    protected $casts = [
        'status' => ConsoleStatus::class,
    ];

    public function assignee():BelongsTo
    {
        return $this->belongsTo(MonitoringStaff::class, 'monitoring_staff_id');
    }
}
