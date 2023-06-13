<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{
    public function storecontact(Request $request){
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Subject' => 'required',
            'Message' => 'required',
        ]);
        $contact = new Contact();
$contact->Name = $request->Name;
$contact->Email = $request->Email;
$contact->Subject = $request->Subject;
$contact->Message = $request->Message;

$contact->save();
return redirect()->route('contact')->with('message', 'Your message has been sent.');


    }
}
