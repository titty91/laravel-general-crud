<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyMatch; 

class TestController extends Controller
{

    private function getValidationRules(){

        return [

            'team1'  => 'required|string|min:2|max:255',
            'team2' => 'required|string|min:2|max:255',  
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean'
        ];
    }


    public function home(){ /* pag home, visualizzo l'elenco delle partire */

        $matches = MyMatch::all();
        
        return view('pages.home', compact('matches'));

    }


    public function show($id){ /*pag show, visualizzo la partita */

        $match = MyMatch::findOrFail($id);

        return view('pages.show', compact('match'));

    }


    public function create(){ /*pag create, visualizzo la partita crea nuova partita */

        return view('pages.create');

    }


    public function store(Request $request){ /*form store, inviare i dati del nuovo match al database */

       // dd($request ->all());  controlliamo che i dati si siano stampati correttamente

       // a questo punto validiamo i dati acquisiti

       $validated = $request -> validate($this -> getValidationRules());

       //dd($validated);

       $match = MyMatch::create($validated);

       return redirect()-> route('show', $match -> id);
    }


    public function edit($id){

        $match = MyMatch::findOrFail($id);

        return view('pages.edit', compact('match'));
    }


    public function update(Request $request, $id){
        
        $match = MyMatch::findOrFail($id);

        $validated = $request -> validate($this -> getValidationRules());

        $match -> update($validated);

        return redirect() -> route('show', $match -> id );
    }

    public function delite($id){

        $match = MyMatch::findOrFail($id);

        $match -> delete();

        return redirect() -> route('home');
        
    }
}
