<?php

namespace App\Observers;

use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        Storage::makeDirectory('public/user/' . $user->id);
    }
}
