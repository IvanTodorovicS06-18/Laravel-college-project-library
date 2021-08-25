<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class autorController extends Controller
{
   
    public function all(Autor $autor){

        
        $autor = Autor::first()->paginate(10);
        return view('/autor/allAuthors', ['autor' => $autor]);
        
    }

    public function create( Autor $autor){

        $autor = Autor::all();
        return view('/autor/autorCreate', ['autor' => $autor]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'firstName'=> 'required|max:40',
            'lastName'=> 'required|max:20',
            
        ]);


        Autor::query()->create($request->only(['firstName', 'lastName']));
        return redirect('/autor/allAuthors');

    }

    public function edit($id){


        $autor = Autor::Find($id);
        return view('autor/edit', ['autor' => $autor]);
    }

    public function update(Request $request, $id)
    {

        $autor = Autor::find($id);
        $autor->firstName = $request->input('firstName');
        $autor->lastName = $request->input('lastName');
        $autor->update();
        return redirect('/autor/allAuthors');

    }

    public function delete($id){

        $autor = Autor::Find($id);
        $autor->delete();
        return redirect('/autor/allAuthors');

    }

}
