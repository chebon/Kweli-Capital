<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request)
    {
        return view('users.create',['role' => $request->role]);

    }
    public function Register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => ['required', 'confirmed'],
            'name' => 'required',
        ]);
       $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
       if($request->role != ''){
           $user->assignRole($request->role);
       }
        return $this->admin();
    }

    public function admin()
    {

    }
}
