<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Subscriber;
use App\Mail\ContactMessageMail; 
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeConfirmationMail;

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
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|nullable',
            'message' => 'required|min:6',
        ]);

        // Create the contact record in the database
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Send an email to the user who submitted the form
        // Make sure $contact is passed to the Mailable
        Mail::to($request->email)->send(new ContactMessageMail($contact));

        // Redirect with a success message
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);
    
        // Save to database
        $subscriber = Subscriber::create([
            'email' => $request->email,
        ]);
    
        // Send confirmation email
        Mail::to($subscriber->email)->send(new SubscribeConfirmationMail($subscriber->email));
    
        // Redirect with success message
        return redirect()->route('home')->with('success', 'Thanks for subscribing!');
    }
    

    // Other methods...

    public function our_profile()
    {
        return view('frontend.welcome');
    }

    public function our_mission()
    {
        return view('frontend.our_mission');
    }

    public function training_development()
    {
        return view('frontend.training_dev');
    }

    public function guest_catering_canteen()
    {
        return view('frontend.guest_catering');
    }

    public function staff_turnkey()
    {
        return view('frontend.staff_turnkey');
    }

    public function our_commitment()
    {
        return view('frontend.our_commitment');
    }

    public function client_operation()
    {
        $states = [
            'MP' => 'Madhya Pradesh',
            'CG' => 'Chhattisgarh',
            'MH' => 'Maharashtra',
            'DL' => 'Delhi',
            'UT' => 'Uttarakhand',
        ];

        return view('frontend.client_&_operation', compact('states'));
    }

    public function show($state)
    {
        $states = [
            'MP' => 'Madhya Pradesh',
            'CG' => 'Chhattisgarh',
            'MH' => 'Maharashtra',
            'DL' => 'Delhi',
            'UT' => 'Uttarakhand',
        ];

        if (!array_key_exists($state, $states)) {
            return redirect()->route('home')->with('error', 'State data not found.');
        }

        $stateName = $states[$state];

        return view('frontend.client_&_operation', compact('stateName'));
    }
}
