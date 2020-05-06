<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('public.home');
    }

    public function aboutPage()
    {
        $contacts = Contact::first();
        return view('public.about',compact('contacts'));
    }

    public function contactPage()
    {
        $contacts = Contact::all()->first();
        return view('public.contact',compact('contacts'));
    }
}
