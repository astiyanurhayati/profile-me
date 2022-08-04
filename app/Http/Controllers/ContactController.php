<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class contactController extends Controller
{
    public function home(){
        return view('home',[
            'title' => 'Home'
        ]);
    }

    public function about(){
        return view('about',[
            'title' => 'ABOUT ME'
        ]);
    }

    public function portofolio(){
        return view('portofolio',[
            'title' => 'MY WORK'
        ]);
    }

    public function contact(){
        return view('contact',[
            'title' => 'Contact'
        ]);
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subjek' => $request->subjek,
            'msg' => $request->msg

        ];

        Mail::to('astiyanurhayati18@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Thank you for contact me ^^');
    }

}
