<?php

namespace App\Http\Controllers;

use App\Mail\ConractFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('test@test.com')->send(new ConractFormMail($data));

        return redirect('contact')
            ->with('message', 'Thank for your message');
    }
}
