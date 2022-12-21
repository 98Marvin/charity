<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteersController extends Controller
{
    public function index () {
        $volunteers = User::where('role_id', 2)->get();

        return view('admin.volunteers.index', compact('volunteers'));
        
    }

    public function create () {
        return view('admin.volunteers.create');
    }
}
