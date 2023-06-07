<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;



class EmailController extends Controller
{

    public function send(Request $request)
    {

        $email = $request->input('email');
        $interest = $request->input('interest');
        $to = 'unop0203@gmail.com';



        $validator = Validator::make($request->all(), [
            'number' => ['required', 'regex:/^[0-9\W]+$/'],
            'budget' => ['nullable', 'regex:/^[0-9\W]+$/'],
        ]);
    
        if ($validator->fails()) {

            Alert::error('Error', 'Check the data and try again.');
            return redirect('/contactUs');
        }

        else {
            Mail::send('send', $request->all(), function($msg) use ($interest,$to,$email)  {

            $msg->from($email);
            $msg->subject($interest);
            $msg->to($to);
    
            });
    
            $contact = new Contact;
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->number = $request->input('number');
            $contact->interest = $request->input('interest');
            $contact->message = $request->input('mensaje');
            $contact->save();

            Alert::success('Success', 'Email sended Succesfully!');
            return redirect('/contactUs');

        }

       
    }
}