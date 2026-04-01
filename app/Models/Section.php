<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $guarded = [];

    public function consoles(): HasMany
    {
        return $this->hasMany(Console::class);
    }

    public function staffs(): HasMany
    {
        return $this->hasMany(CommandCenterStaff::class);
    }

     public function shiftReports(): HasMany
    {
        return $this->hasMany(ShiftReport::class);
    }
}
