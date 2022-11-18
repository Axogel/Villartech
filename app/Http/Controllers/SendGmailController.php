<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendGmailController extends Controller
{
    //
    public function sendgmail(Request $request)
    {

        //dd($request->all());
        //$data = array('name'=>"Hardik Parsania", "body" => "Gmail from Laravel");
    
    
        //   $emailf = 'infovillartech@gmail.com';
		   $r = request();
		   $from_name = $r->name;
		   $from_email = $r->email;
		   $from_text = $r->message;
		   $from_subject= $r->subject;


        Mail::send("gmailview", ['text' => $from_text, 'name' => 
		   $from_name, 'email' => $from_email, 'subject' => $from_subject], function
		   ($message) use ($from_name, $from_email, $from_subject) {
		   $message->to("infovillartech@gmail.com", "VillarTech")
		     ->subject($from_subject);
		      $message->from("infovillartech@gmail.com", $from_name);
		   });

         if (Mail::failures()) {
	 	$request->session()->flash('error', 'Mensaje No Enviado!');
	 }else{
		  //return response()->json('Mensaje Enviado Con Exito !!');
		 $request->session()->flash('success', 'Enviado Satisfactoriamente!');


			  
	  }
		   return redirect('/#contact');
		  // return back();
   }
}
