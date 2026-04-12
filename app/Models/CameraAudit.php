<?php

namespace App\Models;

use App\Enums\CameraStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CameraAudit extends Model
{
    protected $casts = [
        'observation' => 'array',
        'status' => CameraStatus::class,
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
