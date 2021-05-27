<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospiti;

class MyController extends Controller
{
    public function home(){

        $ospiti = Ospiti::all();

        return view('pages.home', compact('ospiti'));
    }

    public function ospite($id){

        $ospite = Ospiti::findOrFail($id);
        // dd($ospite);

        return view('pages.ospite', compact('ospite'));
    }

    public function createGuest(){

        return view('pages.create');
    }

    public function storeGuest(Request $request){

        // dd($request -> all());

        $validate = $request -> validate([

            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'date_of_birth' => 'required|date',
            'document_type' => 'required|max:100',
            'document_number' => 'required|max:100',
        ]);

        $ospite = Ospiti::create($validate);

        return redirect() -> route('ospite', $ospite -> id);
    }
}
