<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class LogisticsManagement extends Model
{
    use Userstamps, SoftDeletes;

    protected $guarded = [];

    protected $table = 'logistics_management';

    public function logisticsDistribution(): HasMany
    {
        return $this->hasMany(LogisticsDistribution::class);
    }
}
