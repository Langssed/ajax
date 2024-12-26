<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {        
        $users = User::paginate(10);
        return view('users', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}