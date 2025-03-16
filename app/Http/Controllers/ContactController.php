<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index () {
        return view('mail.contact');
    }

    public function store(Request $request) {
        $sent = Mail::to('kaduzao53@gmail.com', 'kadu')->send(new contact([
            'fromName' => $request->input('name'),
            'fromEmail' => $request->input('email'),
            'sebject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]));

        var_dump('email sent', $sent);
    }
}
