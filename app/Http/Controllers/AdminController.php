<?php

namespace App\Http\Controllers;

use App\Cause;

use App\Event;
use App\Sponsor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        $sponsors = Sponsor::all();
        $events = Event::all();
        $causes = Cause::all();
        return view('admin.dashboard', compact('sponsors', 'events', 'causes'));
    }
    
    public function donations () {
        return view('admin.donations');
    }
}
