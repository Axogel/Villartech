<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Redirect;


class JobController extends Controller
{


public function job(Request $request)
{
    $email = $request->input('email');
    $interest = $request->input('interest');
    $to = 'info@villartechnologies.com.ve';

    $validator = Validator::make($request->all(), [
            'number' => ['required', 'regex:/^[0-9A-Za-z\W]+$/'],
            'budget' => ['nullable', 'regex:/^[0-9\W]+$/'],
            'attachment' => ['file'],
        ]);

        if ($validator->fails()) {
           Alert::error('Error', 'Check the data and try again.');
                return redirect('/workUs');
        }

        else {
           // Obtener el archivo adjunto del request
    $attachment = $request->file('attachment');

    // Generar un nombre único para el archivo
    $attachmentName = uniqid() . '_' . $attachment->getClientOriginalName();

    // Mover el archivo a la carpeta deseada
    $attachment->move(public_path('storage/app/public/job'), $attachmentName);

    $contact = new Contact;
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->number = $request->input('number');
    $contact->interest = $request->input('interest');
    $contact->budget = 0;
    $contact->message = 0;

    $contact->linkedin = $request->input('linkedin');
    $contact->attachment = 'images/job/' . $attachmentName; // Ruta relativa del archivo adjunto
    $contact->about_us = $request->input('about_us');
    $contact->save();

    Mail::send('emailJob', $request->all(), function($msg) use ($interest, $to, $email) {
        $msg->from($email);
        $msg->subject($interest);
        $msg->to($to);
    });

    Mail::send('emailClient', $request->all(), function($msg) use ($interest, $to, $email) {
        $msg->from('info@villartechnologies.com.ve');
        $msg->subject('Contact Email and Information');
        $msg->to($email);
    });

    Alert::success('Success', 'Email sent successfully!');
    return redirect('/workUs');
        }


   
}

   
}