<?php

namespace App\Http\Controllers;

use App\Models\Knjige;
use App\Models\rentBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class chartController extends Controller
{
    public function index()
    {

        $rent = rentBook::select(DB::raw("COUNT(*) as count"))
            ->whereYear('datumIzdavanja', date('Y'))
            ->groupBy(DB::raw("month(datumIzdavanja)"))
            ->pluck('count');
          
        return view('/editor', compact('rent'));
    }
}
