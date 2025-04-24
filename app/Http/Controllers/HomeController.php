<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Subscriber;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.home");
    }

    public function about()
    {
        return view("frontend.about");
    }

    public function service()
    {
        return view("frontend.service");
    }

    public function contact()
    {
        return view("frontend.contact");
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|nullable',
            'message' => 'required|min:6',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->route('index')->with('success', 'Your message has been sent successfully!');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $request->email,
        ]);

        return redirect()->route('index')->with('success', 'Thanks for subscribing!');
    }

    public function our_profile(){
        return view('frontend.welcome');
    }

    public function our_mission(){
        return view('frontend.our_mission');
    }
    public function training_development(){
        return view('frontend.training_dev');
    }
    public function guest_catering_canteen(){
        return view('frontend.guest_catering');
    }
    public function staff_turnkey(){
        return view('frontend.staff_turnkey');
    }
    public function our_commitment(){
        return view('frontend.our_commitment');
    }
}

