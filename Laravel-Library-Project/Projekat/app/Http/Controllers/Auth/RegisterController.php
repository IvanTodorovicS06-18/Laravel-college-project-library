<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function Index(){

        return view('Auth.register');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName'=> 'required|max:40',
            'lastName'=> 'required|max:20',
            'password'=> 'required|max:50',
            'adress'=> 'required|max:250|',
            'email'=> 'required|max:250'
        ]);

        User::create([

            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'password'=> Hash::make($request->password),
            'adress'=> $request->adress,
            'email'=> $request->email

        ]);


        return redirect()->route('books')->with('status','Uspesno ste se registrovali');

    }

    

}
