<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;


class Topic extends Model
{
    use Userstamps, SoftDeletes;
    
    protected $guarded = [];

    public function monitoringTasks(): BelongsToMany
    {
        return $this->belongsToMany(MonitoringTask::class, 'monitoring_topics', 'topic_id', 'monitoring_task_id');
    }

}
