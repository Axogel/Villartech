<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Models\Faq;

class ContactController extends Controller
{

    public function sendEmail(Request $request)
    {

        $email = $request->input('email');
        $interest = $request->input('interest');
        $to = 'unop0203@gmail.com';

        Mail::send('email', $request->all(), function($msg) use ($interest,$to,$email)  {

            $msg->from($email);
            $msg->subject($interest);
            $msg->to($to);

        });


        return redirect('/services')->withSuccessMessage('Email have been send', 'FAQ have been created');
       
    }
}
