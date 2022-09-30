<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();

        return view('index', compact('contact'));
    }

}
