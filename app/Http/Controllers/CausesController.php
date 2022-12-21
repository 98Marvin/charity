<?php

namespace App\Http\Controllers;

use App\Cause;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function index () {
        $causes = Cause::all();
        return view('admin.causes.index', compact('causes'));
    }
    
    public function create () {
        return view('admin.causes.create');
    }

    public function store (Request $request) {
        $input = $request->all();

        if ($file = $request->file('image')) {
            
            $name = $file->getClientOriginalName();

            $file->move('public/front/uploads/causes/', $name);
            
            $input['image'] = $name;
        }

        $cause = Cause::create($input);

        return redirect()->route('causes.index')->with('success', 'Cause Added Successfully...');
    }

    public function edit ($id) {
        $cause = Cause::findOrFail($id);
        return view('admin.causes.edit', compact('cause'));
    }

    public function update (Request $request, $id) {
        $cause = Cause::findOrFail($id);
        
        $input = $request->all();
        
        if($file = $request->file('image')) {
            if($cause->image) {
                unlink('public/front/uploads/causes/'.$cause->image);
            }
            
            $name = $file->getClientOriginalName();
            
            $file->move('public/front/uploads/causes/', $name);

            $input['image'] = $name;
        }
        
        $cause->update($input);
        
        return redirect()->route('causes.index')->with('success', 'Cause Updated Successfully...');
        
    }

    public function delete ($id) {
        $cause = Cause::findOrFail($id);
        
        $cause->delete();
        
        return redirect()->route('causes.index')->with('success', 'Cause Deleted Successfully...');

    }
}
