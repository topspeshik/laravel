<?php

namespace App\Listeners;

use App\Events\SenderEvent;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class EmailListener
{

    public function __construct()
    {
        //
    }


    public function handle(SenderEvent $event)
    {
       $login = $event->message['login'];

       $email = $event->message['email'];

       Mail::to($email)->send(new WelcomeMail($login, $email));

    }
}
