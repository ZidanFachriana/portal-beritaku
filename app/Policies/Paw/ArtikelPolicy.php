<?php

namespace App\Policies\Paw;

use App\Models\User;
use App\Models\Artikel ;

use Illuminate\Auth\Access\HandlesAuthorization;

class ArtikelPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function alls(User $user, Artikel $artikel) {
        return $user->id === $artikel->user_id;
    }
}
