<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function ContactForm(Request $request){

        $this->validate($request,[
            'name' => 'required|string|min:3',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:100'
        ]);

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()

        ]);



        Alert::alert('Success', 'Thank you for contacting us', 'success');


        return Redirect()->back();

    }
}
