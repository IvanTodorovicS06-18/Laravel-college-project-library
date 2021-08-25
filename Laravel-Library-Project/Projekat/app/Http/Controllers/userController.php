<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function all(User $user){

        
        $user = User::first()->paginate(5);
        return view('/user/allUsers', ['user' => $user]);
        
    }

    public function create( User $user){

        $user = User::all();
        return view('/user/userCreate', ['user' => $user]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'firstName'=> 'required|max:40',
            'lastName'=> 'required|max:20',
            'password'=> 'required|min:3',
            'adress'=> 'required|max:250',
            'email'=> 'required|unique:users|max:250'
        ]);


        User::create([

            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'password'=> Hash::make($request->password),
            'adress'=> $request->adress,
            'email'=> $request->email,
            'privilegeLevel' => $request->privilegeLevel,

        ]);
        return redirect('/user/allUsers')->with('status','Uspesno ste dodali korisnika');

    }

    public function edit($id){


        $user = User::Find($id);
        return view('/user/edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
       
        $user->adress = $request->input('adress');
        $user->email = $request->input('email');
        $user->privilegeLevel = $request->input('privilegeLevel');
        $user->update();
        return redirect('/user/allUsers');

    }

    public function delete($id){

        $user = User::Find($id);
        $user->delete();
        return redirect('/user/allUsers');

    }
}
