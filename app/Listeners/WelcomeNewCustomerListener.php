<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegistredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewCustomerListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewCustomerHasRegistredEvent $event)
    {
        sleep(10);

        Mail::to($event->customer->email)->send(new WelcomeNewUserMail());
    }
}
