<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mattiverse\Userstamps\Traits\Userstamps;

class CallStaff extends Model
{
    use Userstamps, SoftDeletes;
    
    protected $guarded = [];

    protected $table = 'call_staffs';

}
