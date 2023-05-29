<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Models\Faq;


class EmailController extends Controller
{

    public function send(Request $request)
    {

      $email = $request->input('email');
      $message = $request->input('message');
      $to = 'unop0203@gmail.com';

      // Validar si $message es nulo y asignar un valor predeterminado en ese caso
      if (!$message) {
          $message = 'Default subject';
      }

      Mail::send('send', $request->all(), function($msg) use ($message, $to, $email)  {
          $msg->from($email);
          $msg->to($to);
          $msg->subject($message);
      });


        return redirect('/contactUs')->withSuccessMessage('Email have been send', 'FAQ have been created');
       
    }
}