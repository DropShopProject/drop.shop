<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Mail\Mailable;


class MailController extends Controller
{
    //Send Mail Function

	

    public function sendMail()
    {
    	//$bcc = ($recipient['zdavies98@gmail.com'], $recipient['Zac']) ($recipient
    	//	['josered28@gmail.com'], $recipient['Jose']),
    	//($recipient['sky63098@gmail.com'], $recipient['Waleed']), ($recipient
    	//	['aknaik99@gmail.com'], $recipient['AK']);

    	Mail::to('zdavies98@gmail.com')
    			->bcc('aknaik99@gmail.com')
          //      ->bcc('josered28@gmail.com')
          //                  'sky63098@gmail.com' 'aknaik99@gmail.com')
    			->send(new TestMail());

    		if (Mail::failures())
    		{
    			return 'fail';
    		}

    		return 'success';
    }
}
