<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyMatch; 

class TestController extends Controller
{
    public function home(){ /* pag home, visualizzo l'elenco delle partire */

        $matches = MyMatch::all();
        
        return view('pages.home', compact('matches'));

    }

    public function show($id){ /*pag show, visualizzo la partita */

        $match = MyMatch::findOrFail($id);

        return view('pages.show', compact('match'));

    }

}
