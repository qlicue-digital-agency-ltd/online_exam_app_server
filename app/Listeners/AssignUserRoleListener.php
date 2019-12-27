<?php

namespace App\Listeners;

use App\Events\UserHasRegisteredSucceffulyEvent;
use App\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignUserRoleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegisteredSucceffulyEvent  $event
     * @return void
     */
    public function handle(UserHasRegisteredSucceffulyEvent $event)
    {
        $role = Role::where('name', 'Parent')->first();

        $event->user->roles()->attach($role);
    }
}
