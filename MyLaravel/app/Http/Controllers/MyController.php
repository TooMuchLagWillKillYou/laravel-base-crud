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

    public function addOspite(){

        return view('pages.add-ospite');
    }

    public function submitForm(Request $request){

        // dd($request -> all());

        $validate = $request -> validate([

            'name' => 'nullable|max:100',
            'lastname' => 'nullable|max:100',
            'date_of_birth' => 'nullable|date',
            'document_type' => 'nullable|max:100',
            'document_number' => 'nullable|max:100',
        ]);

        $ospite = Ospiti::create($validate);

        return redirect() -> route('ospite', $ospite -> id);
    }
}
