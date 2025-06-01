<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        // Validate input
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'],
        //     'subject' => ['required'],
        //     'message' => ['required']
        // ]);

        // Create new contact
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'sub' => $request->subject,
            'msg' => $request->message
        ]);

        // Redirect after success
        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح!');
    }
}
