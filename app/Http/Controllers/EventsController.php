<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index () {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }
    
    public function create () {
        return view('admin.events.create');
    }
    
    public function store (Request $request) {
        $input = $request->all();

        if ($file = $request->file('image')) {
            
            $name = $file->getClientOriginalName();

            $file->move('public/front/uploads/events/', $name);
            
            $input['image'] = $name;
        }

        $event = Event::create($input);

        return redirect()->route('events.index')->with('success', 'Event Added Successfully...');
    }
    
    public function edit ($id) {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }
    
    public function update (Request $request, $id) {
        $event = Event::findOrFail($id);
        
        $input = $request->all();
        
        if($file = $request->file('image')) {
            if($event->image) {
                unlink('public/front/uploads/events/'.$event->image);
            }
            
            $name = $file->getClientOriginalName();
            
            $file->move('public/front/uploads/events/', $name);

            $input['image'] = $name;
        }
        
        $event->update($input);
        
        return redirect()->route('events.index')->with('success', 'Event Updated Successfully...');
        
    }
    
    public function delete ($id) {
        $event = Event::findOrFail($id);
        
        $event->delete();
        
        return redirect()->route('events.index')->with('success', 'Event Deleted Successfully...');

    }
}
