<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $login;
    protected $email;


    public function __construct($login, $email)
    {
        $this->login = $login;
        $this->email = $email;

    }


    public function build()
    {

        return $this->view('/emails/welcome')->with([
            'login' => $this->login,
            'email' => $this->email
        ])->subject('Test registration message Laravel');
    }
}
