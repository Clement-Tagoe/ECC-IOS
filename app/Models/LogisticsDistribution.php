<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class LogisticsDistribution extends Model
{
    use Userstamps, SoftDeletes;

    protected $guarded = [];
    
    public function logisticsManagement(): BelongsTo
    {
        return $this->belongsTo(LogisticsManagement::class, 'logistics_management_id');
    }
}
