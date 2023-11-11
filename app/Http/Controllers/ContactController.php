<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }
}
