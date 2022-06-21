<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Gerecht;

class bestellingController extends Controller
{
    public function index() {
        $categorieeën = Categorie::All();

        return view('gerecht',[ 
        'categorieeën' => $categorieeën,
        ]);
    }

    public function createGerecht(Request $request) {
        $newGerecht = new Gerecht;

        $newGerecht->naam = $request->input('naam');
        $newGerecht->categorie_id = $request->input('categorie');
        $newGerecht->code = $request->input('code');
        $newGerecht->save();

        return redirect()->route('create-bestelling');
    }
}