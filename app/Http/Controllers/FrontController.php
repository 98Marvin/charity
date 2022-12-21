<?php

namespace App\Http\Controllers;

use App\Cause;
use App\Event;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        $events = Event::all()->take('2');
        $causes = Cause::all();
        return view('welcome', compact('events', 'causes'));
    }
   
    public function donate () {
        return view('donate');
    }
   
    public function about () {
        return view('about');
    }
    
    public function causes () {
        return view('causes');
    }
    
    public function events () {
        return view('events');
    }

    public function blog () {
        return view('blog');
    }
   
    public function contact () {
        return view('contact');
    }
    
    public function volunteer () {
        return view('volunteer');
    }
}
