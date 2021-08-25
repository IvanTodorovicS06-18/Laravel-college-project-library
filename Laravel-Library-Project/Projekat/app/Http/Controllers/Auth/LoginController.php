<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index(){
   
        return view('Auth.login');
    }

 

    public function store(Request $request){
        $this->validate($request, [
           
            'email' => 'required|max:255',
            'password' => 'required',
        ]);
        if(!Auth::attempt($request->only('email', 'password'),$request->remember)){
            return back()->with("status","Your email or password is not correct");
        }
        

        return redirect()->route('books')->with('status','Uspesno ste se logovali');
    }
}