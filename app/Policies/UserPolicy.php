<?php

namespace App\Policies;

use App\Models\User; // Adjust according to your model namespace
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can access certain areas based on their status.
     */
    public function accessAreas(User $user)
    {
        return $user->status === 'Responden';
    }


}
