<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function sendEmail(Request $request)
    {

        {

            $email = $request->input('email');
            $interest = $request->input('interest');
            $to = 'info@villartechnologies.com.ve';
    
    
    
            $validator = Validator::make($request->all(), [
                'number' => ['required', 'regex:/^[0-9\W]+$/'],
                'budget' => ['nullable', 'regex:/^[0-9\W]+$/'],
            ]);
        
            if ($validator->fails()) {
    
                Alert::error('Error', 'Check the data and try again.');
                return redirect('/services');
            }
    
            else {
                Mail::send('email', $request->all(), function($msg) use ($interest,$to,$email)  {
    
                $msg->from($email);
                $msg->subject($interest);
                $msg->to($to);
        
                });



                Mail::send('emailClient', $request->all(), function($msg) use ($interest,$to,$email)  {
    
                    $msg->from('info@villartechnologies.com.ve');
                    $msg->subject('Contact Email and Information');
                    $msg->to($email);
            
                    });
        
                $contact = new Contact;
                $contact->name = $request->input('name');
                $contact->email = $request->input('email');
                $contact->number = $request->input('number');
                $contact->interest = $request->input('interest');
                $contact->budget = $request->input('budget');
                $contact->message = $request->input('mensaje');
                $contact->save();
    
                Alert::success('Success', 'Email sended Succesfully!');
                return redirect('/services');
    
            }

       
    }
}


    public function index() {

        $contacts = Contact::orderBy('id', 'desc')->paginate(5);
        return view ('contacts.index', $contacts)->with('contacts', $contacts);
    }

 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */


    public function destroy(Contact $id)
    {
        $id->delete();
        return redirect()->route('contacts.index');
}




}
