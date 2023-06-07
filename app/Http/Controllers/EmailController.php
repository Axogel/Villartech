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

        {

            $email = $request->input('email');
            $interest = $request->input('interest');
            $to = 'infovillartech@gmail.com';
    
    
    
            $validator = Validator::make($request->all(), [
                'number' => ['required', 'regex:/^[0-9\W]+$/'],
                'budget' => ['nullable', 'regex:/^[0-9\W]+$/'],
            ]);
        
            if ($validator->fails()) {
    
                Alert::error('Error', 'Check the data and try again.');
                return redirect('/contactUs');
            }
    
            else {
                Mail::send('email', $request->all(), function($msg) use ($interest,$to,$email)  {
    
                $msg->from($email);
                $msg->subject($interest);
                $msg->to($to);
        
                });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Mail::send('emailClient', $request->all(), function($msg) use ($interest,$to,$email)  {
=======
            Mail::send('email', $request->all(), function($msg) use ($interest,$to,$email)  {
>>>>>>> 6af7f45 (test)
=======


                Mail::send('emailClient', $request->all(), function($msg) use ($interest,$to,$email)  {
>>>>>>> 529f5af (email changes)
=======


                Mail::send('emailClient', $request->all(), function($msg) use ($interest,$to,$email)  {
>>>>>>> refs/remotes/origin/develop
    
                    $msg->from('infovillartech@gmail.com');
                    $msg->subject('Contact Email and Information');
                    $msg->to($email);
            
                    });
<<<<<<< HEAD
<<<<<<< HEAD
=======

            Mail::send('emailClient', $request->all(), function($msg) use ($interest,$to,$email)  {
    
                $msg->from('infovillartech@gmail.com');
                $msg->subject('Contact Email and Information');
                $msg->to($email);
        
                });
>>>>>>> 18d31a0 (email test)
=======
=======
>>>>>>> refs/remotes/origin/develop
        
                $contact = new Contact;
                $contact->name = $request->input('name');
                $contact->email = $request->input('email');
                $contact->number = $request->input('number');
                $contact->interest = $request->input('interest');
                $contact->message = $request->input('mensaje');
                $contact->save();
<<<<<<< HEAD
>>>>>>> 529f5af (email changes)
=======
>>>>>>> refs/remotes/origin/develop
    
                Alert::success('Success', 'Email sended Succesfully!');
                return redirect('/contactUs');
    
            }

       
    }
}


   
}



