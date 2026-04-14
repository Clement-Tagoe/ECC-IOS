<?php

namespace App\Models;

use App\Enums\MonitoringTaskStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MonitoringTask extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $guarded = [];

    protected $casts = [
        'status' => MonitoringTaskStatus::class,
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function region():BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function cameras():BelongsToMany
    {
        return $this->belongsToMany(CameraAudit::class, 'monitoring_cameras', 'monitoring_task_id', 'camera_audit_id');
    }

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'monitoring_topics', 'monitoring_task_id', 'topic_id');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
