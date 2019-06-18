<?php

namespace App\Policies;

use App\User;
use App\ToDo;
use Illuminate\Auth\Access\HandlesAuthorization;

class ToDoPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any to dos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user, ToDo $toDo)
    {
        //
    }

    /**
     * Determine whether the user can view the to do.
     *
     * @param  \App\User  $user
     * @param  \App\ToDo  $toDo
     * @return mixed
     */
    public function view(User $user, ToDo $toDo)
    {
        return $toDo->owner_id == $user->id;
    }

    /**
     * Determine whether the user can create to dos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the to do.
     *
     * @param  \App\User  $user
     * @param  \App\ToDo  $toDo
     * @return mixed
     */
    public function update(User $user, ToDo $toDo)
    {
        //
    }

    /**
     * Determine whether the user can delete the to do.
     *
     * @param  \App\User  $user
     * @param  \App\ToDo  $toDo
     * @return mixed
     */
    public function delete(User $user, ToDo $toDo)
    {
        //
    }

    /**
     * Determine whether the user can restore the to do.
     *
     * @param  \App\User  $user
     * @param  \App\ToDo  $toDo
     * @return mixed
     */
    public function restore(User $user, ToDo $toDo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the to do.
     *
     * @param  \App\User  $user
     * @param  \App\ToDo  $toDo
     * @return mixed
     */
    public function forceDelete(User $user, ToDo $toDo)
    {
        //
    }
}
