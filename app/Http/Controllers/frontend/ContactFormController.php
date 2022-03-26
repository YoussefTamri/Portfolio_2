<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        Mail::to('yousseftam100@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Sent Successfully');

    }
}
