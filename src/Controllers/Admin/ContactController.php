<?php

namespace Hamiddj\ContactUs\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Hamiddj\ContactUs\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contactUs::admin.contact-us.index',compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        $contact->status = 'READ';
        $contact->save();
        return view('contactUs::admin.contact-us.show',compact('contact'));
    }
}