<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;
use App\Models\Otp;

class AuthCode extends Mailable
{
    use Queueable, SerializesModels;

    private $_user;
    private $_otp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Otp $otp)
    {
        $this->_user = $user;
        $this->_otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.authcode', ['user' => $this->_user, 'otp' => $this->_otp]);
    }
}
