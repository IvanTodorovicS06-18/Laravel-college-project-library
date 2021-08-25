<?php

namespace App\Http\Controllers;

use App\Models\Izdavac;
use Illuminate\Http\Request;

class publisherController extends Controller
{
    public function all(Izdavac $izdavac){

        
        $izdavac = Izdavac::first()->paginate(5);
        return view('/publisher/allPublishers', ['izdavac' => $izdavac]);
        
    }

    public function create( Izdavac $izdavac){

        $izdavac = Izdavac::all();
        return view('/publisher/publisherCreate', ['izdavac' => $izdavac]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'imeIzdavaca'=> 'required|max:100',
            'adress'=> 'required|max:250',
            'email'=> 'required|max:150',
            'brojTelefona'=> 'required|numeric|digits:10|',
        ]);

        Izdavac::query()->create($request->only(['imeIzdavaca', 'adress', 'email', 'brojTelefona']));
        return redirect('/publisher/allPublishers');

    }

    public function edit($id){

        
        $izdavac = Izdavac::Find($id);
        return view('/publisher/edit', ['izdavac' => $izdavac]);
    }

    public function update(Request $request, $id)
    {

        $izdavac = Izdavac::find($id);
        $izdavac->imeIzdavaca = $request->input('imeIzdavaca');
        $izdavac->adress = $request->input('adress');
        $izdavac->email = $request->input('email');
        $izdavac->brojTelefona = $request->input('brojTelefona');
        $izdavac->update();
        return redirect('/publisher/allPublishers');

    }

    public function delete($id){

        $izdavac = Izdavac::Find($id);
        $izdavac->delete();
        return redirect('/publisher/allPublishers');

    }

}
