<?php

namespace App\Models;

use App\Enums\CallLogStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class CallLog extends Model
{
    use Userstamps, SoftDeletes;
    
    protected $guarded = [];

    protected $casts = [
        'status' => CallLogStatus::class,
    ];
}
