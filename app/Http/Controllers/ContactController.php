<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view("contact.index");
    }

    public function store(ContactRequest $request) {
        $contact = new ContactMailable($request->all());
        Mail::to($request->email)->send($contact);
        return redirect()->route("contact.index")->with("info", "El Mensaje Se Envio Correctamente");
    }
}
