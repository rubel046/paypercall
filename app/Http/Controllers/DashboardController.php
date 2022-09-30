<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::first();

        return view('home', compact('contact'));
    }

    public function updatePhoneNo(Request $request)
    {
        $request->validate([
            'phone_no' => 'required',
        ]);

        try {
            Contact::updateOrCreate([], [
                'title' => $request->phone_no
            ]);

            session()->flash('success', 'Phone no updated successfully.');
            return redirect()->back();

        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
