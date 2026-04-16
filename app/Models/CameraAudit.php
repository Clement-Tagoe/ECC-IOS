<?php

namespace App\Models;

use App\Enums\CameraStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class CameraAudit extends Model
{
    use Userstamps, SoftDeletes;

    protected $casts = [
        'status' => CameraStatus::class,
    ];

    protected $guarded = [];
    
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function observations():BelongsToMany
    {
        return $this->belongsToMany(Observation::class, 'camera_observations', 'camera_audit_id', 'observation_id');
    }

    public function cameraLocation(): BelongsTo
    {
        return $this->belongsTo(CameraLocation::class, 'camera_location_id');
    }
}
