<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zanr;
use App\Models\Autor;
use App\Models\Knjige;
use App\Models\Izdavac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTable;

class BookController extends Controller
{
    public function all(Knjige $knjige){

        
        $knjige = Knjige::first()->with(['Autor', 'Izdavac', 'Zanr'])->paginate(10);
        return view('/book/allBooks', ['knjige' => $knjige]);
        
    }

   

    public function showBook(Post $post, $id){

        $knjige = Knjige::Find($id);
        $post = Post::first()->where('knjigaID', '=', $id)->paginate(3);
        

 
        return view('book/showBook', ['knjige' => $knjige, 'post' => $post]);

    }

    public function storePost(Request $request){

            Post::create([

                'knjigaID'=> $request->input('knjigaID'),
                'userID'=> Auth::user()->userID,
                'opis'=> $request->opis,
            ]);
            return back();
    }

    public function create( Autor $autor, Izdavac $izdavac, Zanr $zanr){

        $autor = Autor::all();
        $izdavac = Izdavac::all();
        $zanr = Zanr::all();

        return view('/book/bookCreate', ['izdavac' => $izdavac, 'zanr' => $zanr, 'autor' => $autor]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'imeKnjige'=> 'required|max:40',
            'kolicina'=> 'required|gt:-1',
            'ocena'=> 'required|lt:11|gt:0',
            'opis'=> 'required|max:250',
        ]);


        Knjige::query()->create($request->only(['imeKnjige', 'autorID', 'izdavacID', 'zanrID', 'kolicina', 'ocena', 'opis']));
        return redirect('/book/books');

    }

    public function edit(Autor $autor, Izdavac $izdavac, Zanr $zanr, $id){

        $autor = Autor::all();
        $izdavac = Izdavac::all();
        $zanr = Zanr::all();

        $knjiga = Knjige::Find($id);
        return view('book/edit', ['knjiga' => $knjiga, 'autor' => $autor, 'izdavac' => $izdavac, 'zanr' => $zanr]);
    }

    public function update(Request $request, $id)
    {

        $knjige = Knjige::find($id);
        $knjige->imeKnjige = $request->input('imeKnjige');
        $knjige->autorID = $request->input('autorID');
        $knjige->izdavacID = $request->input('izdavacID');
        $knjige->zanrID = $request->input('zanrID');
        $knjige->kolicina = $request->input('kolicina');
        $knjige->ocena = $request->input('ocena');
        $knjige->opis = $request->input('opis');
        $knjige->update();
        return redirect('/book/books');

    }

    public function delete($id){

        $knjige = Knjige::Find($id);
        $knjige->delete();
        return redirect('/book/books');

    }

    public function search(Request $request){

        $search = $request->get('search');
        $knjige = Knjige::where('imeKnjige', 'like', '%'.$search.'%')->with(['Autor', 'Izdavac', 'Zanr'])->paginate(10);

        return view('/book/allBooks', ['knjige'=>$knjige]);

    }

}
