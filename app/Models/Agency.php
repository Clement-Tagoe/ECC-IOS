<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Model
{
    protected $guarded = [];

    public function ValidCases(): HasMany
    {
        return $this->hasMany(ValidCase::class);
    }
}
