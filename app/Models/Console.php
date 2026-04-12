<?php

namespace App\Models;

use App\Enums\ConsoleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Console extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => ConsoleStatus::class,
    ];
    
    public function section():BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function assignee():BelongsTo
    {
        return $this->belongsTo(CommandCenterStaff::class, 'command_center_staff_id');
    }
}
