<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_karyawan' => 'required|unique:users|max: 10',
            'name' => 'required',
            'username' => ['required', 'min: 5', 'unique:users'],
            'password' => 'required|min :6',

        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Success !!! |||Please Login');

        return redirect('/')->with('success', 'Registration Success !!!  Please Login');
    }
}
