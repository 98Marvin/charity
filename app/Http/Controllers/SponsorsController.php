<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;

class SponsorsController extends Controller
{
    public function index () {
        $sponsors = Sponsor::all();
        return view('admin.sponsors.index', compact('sponsors'));
    }
    
    public function create () {

        return view('admin.sponsors.create');
    }
    
    public function store (Request $request) {
        $input = $request->all();

        if ($file = $request->file('image')) {
            
            $name = $file->getClientOriginalName();

            $file->move('public/front/uploads/sponsors/', $name);
            
            $input['image'] = $name;
        }

        $sponsor = Sponsor::create($input);

        return redirect()->route('sponsors.index')->with('success', 'Sponsor Added Successfully...');
    }

    public function edit ($id) {
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.sponsors.edit', compact('sponsor'));
    }

    public function update (Request $request, $id) {
        $sponsor = Sponsor::findOrFail($id);
        
        $input = $request->all();
        
        if($file = $request->file('image')) {
            if($sponsor->image) {
                unlink('public/front/uploads/sponsors/'.$sponsor->image);
            }
            
            $name = $file->getClientOriginalName();
            
            $file->move('public/front/uploads/sponsors/', $name);

            $input['image'] = $name;
        }
        
        $sponsor->update($input);
        
        return redirect()->route('sponsors.index')->with('success', 'Sponsor Updated Successfully...');
        
    }
}
