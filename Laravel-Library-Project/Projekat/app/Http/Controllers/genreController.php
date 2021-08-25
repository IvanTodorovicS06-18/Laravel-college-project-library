<?php

namespace App\Http\Controllers;

use App\Models\Zanr;
use Illuminate\Http\Request;

class genreController extends Controller
{
    public function all(Zanr $zanr){

        
        $zanr = Zanr::first()->paginate(8);
        return view('/zanr/allGenres', ['zanr' => $zanr]);
        
    }

    public function create( Zanr $zanr){

        $zanr = Zanr::all();
        return view('/zanr/genreCreate', ['zanr' => $zanr]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'imeZanra'=> 'required|max:40',
            
        ]);

        Zanr::query()->create($request->only(['imeZanra']));
        return redirect('/zanr/allGenres');

    }

    public function edit($id){


        $zanr = Zanr::Find($id);
        return view('zanr/edit', ['zanr' => $zanr]);
    }

    public function update(Request $request, $id)
    {

        $zanr = Zanr::find($id);
        $zanr->imeZanra = $request->input('imeZanra');
        $zanr->update();
        return redirect('/zanr/allGenres');

    }

    public function delete($id){

        $zanr = Zanr::Find($id);
        $zanr->delete();
        return redirect('/zanr/allGenres');

    }
}
