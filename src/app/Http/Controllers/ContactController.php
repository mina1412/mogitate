<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

    public function confirm(ContactRequest $request)
    {
       $contact = $request->only(['name', 'email', 'tel', 'content']);
       return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
      dd($request->all());//
      $contact = $request->only(['name', 'email' ,'tel' ,'content']);
      Contact::create($contact);
      return view('thanks');
    }
}
