<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use \App\User;


class MailController extends Controller
{
    //Send Mail Function
    public function send(Request $request)
    {

       $sent = User::where('EmailOptIn', 1)->get(['id', 'email']);
      
       $emails = [];
       foreach($sent as $s)
       {
            $emails[] = $s->email;
       }



        Mail::send('emails.mail', $emails, function ($message) use ($emails)
        {
            $message->from('dropshop4935@gmail.com');
            $message->bcc($emails);

        });


        return 'success';


    }
  
}
