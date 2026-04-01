<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Report extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function receivers()
    {
        return $this->belongsToMany(User::class, 'report_user');
    }

    public function collaborators()
    {
        return $this->belongsToMany(User::class, 'report_collaborator');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function reportComments(): HasMany
    {
        return $this->hasMany(ReportComment::class);
    }
}
