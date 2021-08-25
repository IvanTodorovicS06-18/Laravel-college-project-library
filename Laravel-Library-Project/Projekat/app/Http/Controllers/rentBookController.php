<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Knjige;
use App\Models\rentBook;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class rentBookController extends Controller
{
    public function all(rentBook $rentBook){

        

        $rentBook = rentBook::get();
        return view('/rent/allRents', ['rentBook' => $rentBook]);
        
    }

    public function create($id){

        $knjige = Knjige::Find($id);

        if(!Auth::user()){

            return back();

        }
        else{

            return view('/rent/rentCreate', ['knjige' => $knjige]);
        }

    }

    

    public function store(Request $request){

        $this->validate($request, [
            
            'datumIzdavanja' => 'required|after_or_equal: 2021-01-01|before_or_equal:today',
            
        ]);

            rentBook::create([

                'knjigaID'=> $request->input('knjigaID'),
                'userID'=> Auth::user()->userID,
                'datumIzdavanja'=> $request->datumIzdavanja,
            
            ]);

           
        

                $id = $request->input('knjigaID');
                Knjige::first()->where('knjigaID', '=', $id)->decrement('kolicina', 1);
                return redirect('/book/books')->with('status','Uspesno ste iznajmili knjigu');

              




    }

    public function update(Request $request, $id)
    {

        $rentBook = rentBook::find($id);
        $rentBook->datumVracanja = Carbon::now();
        $rentBook->update();
        Knjige::where('knjigaID', '=', $rentBook->knjigaID)->increment('kolicina', 1);
        return redirect('/rent/allRents');

    }

}
