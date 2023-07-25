<?php

namespace Hamiddj\ContactUs\Controllers\User;

use App\Http\Controllers\Controller;
use Hamiddj\ContactUs\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contactUs::user.contact-us');
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'text' => $request->text,
            
        ]);
        return redirect()->back();
    }
}