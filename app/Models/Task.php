<?php

namespace App\Models;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => TaskStatus::class,
        'priority' => TaskPriority::class,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function collaborators()
    {
        return $this->belongsToMany(User::class, 'task_collaborator');
    }
}
