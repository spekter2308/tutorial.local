<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegistredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterCustomerListener
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
     * @param  NewCustomerHasRegistredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegistredEvent $event)
    {
        dump('Slack message here');
    }
}
