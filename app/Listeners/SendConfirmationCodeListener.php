<?php

namespace App\Listeners;

use App\Events\UserHasRegisteredSucceffulyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendConfirmationCodeListener
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
        //
    }
}
