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

    public function aboutUs() {
        $contact = Contact::first();

        return view('about-us', compact('contact'));
    }

    public  function  contactUs() {
        $contact = Contact::first();

        return view('contact-us', compact('contact'));
    }

    public  function  laundryService() {
        $contact = Contact::first();

        return view('laundry-service', compact('contact'));
    }

    public  function  kitchenService() {
        $contact = Contact::first();

        return view('kitchen-service', compact('contact'));
    }

    public  function  commercialService() {
        $contact = Contact::first();

        return view('commercial-service', compact('contact'));
    }

    public  function  multiService() {
        $contact = Contact::first();

        return view('multi-service', compact('contact'));
    }
}
